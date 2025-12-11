<?php

namespace App\Services;

use App\Models\WhatsAppConversation;

class BotService
{
    public function __construct(
        private WhatsAppClient $whatsapp,
        private EmrApiClient $emr,
    ) {}

    public function handleIncoming(string $phone, string $body, array $rawValue): void
    {
        $body = trim($body);

        $conversation = WhatsAppConversation::firstOrCreate(
            ['phone' => $phone],
            ['current_flow' => null, 'step' => 0, 'context' => []],
        );

        // Global commands
        if (strtolower($body) === 'menu') {
            $this->resetConversation($conversation);
            $this->sendMenu($phone);
            return;
        }

        // If no active flow yet
        if (empty($conversation->current_flow)) {
            $this->handleNewConversation($conversation, $body);
        } else {
            $this->continueFlow($conversation, $body);
        }
    }

    protected function resetConversation(WhatsAppConversation $conversation): void
    {
        $conversation->update([
            'current_flow' => null,
            'step'         => 0,
            'context'      => [],
        ]);
    }

    protected function sendMenu(string $phone): void
    {
        $text = "Modality EMR – WhatsApp Menu:\n\n"
              . "1️⃣ Create new patient\n"
              . "2️⃣ Get patient summary (by your WhatsApp number)\n\n"
              . "Reply with a number (e.g. 1).\n"
              . "Type 'menu' anytime to restart.";

        $this->whatsapp->sendText($phone, $text);
    }

    protected function handleNewConversation(WhatsAppConversation $conversation, string $body): void
    {
        $phone = $conversation->phone;

        if ($body === '1') {
            $conversation->update([
                'current_flow' => 'create_patient',
                'step'         => 1,
                'context'      => [],
            ]);

            $this->whatsapp->sendText($phone, "Creating new patient.\n\nPlease send patient full name:");
            return;
        }

        if ($body === '2') {
            $summary = $this->emr->getPatientSummaryByPhone($phone);

            if (!$summary) {
                $this->whatsapp->sendText($phone, "No patient linked to this WhatsApp number yet.");
            } else {
                $name = $summary['name'] ?? 'Unknown';
                $dob  = $summary['dob'] ?? 'N/A';
                $mrn  = $summary['mrn'] ?? ($summary['id'] ?? 'N/A');

                $this->whatsapp->sendText(
                    $phone,
                    "Patient summary:\nName: {$name}\nDOB: {$dob}\nMRN: {$mrn}"
                );
            }

            $this->sendMenu($phone);
            return;
        }

        // Fallback if no flow & unknown input
        $this->sendMenu($phone);
    }

    protected function continueFlow(WhatsAppConversation $conversation, string $body): void
    {
        $flow    = $conversation->current_flow;
        $step    = $conversation->step;
        $context = $conversation->context ?? [];

        if ($flow === 'create_patient') {
            $this->handleCreatePatientFlow($conversation, $body, $context, $step);
        } else {
            // Unknown flow, reset
            $this->resetConversation($conversation);
            $this->sendMenu($conversation->phone);
        }
    }

    protected function handleCreatePatientFlow(
        WhatsAppConversation $conversation,
        string $body,
        array $context,
        int $step,
    ): void {
        $phone = $conversation->phone;

        if ($step === 1) {
            $context['name'] = $body;

            $conversation->update([
                'step'    => 2,
                'context' => $context,
            ]);

            $this->whatsapp->sendText($phone, "Got it. Now send patient DOB (YYYY-MM-DD):");
            return;
        }

        if ($step === 2) {
            $context['dob'] = $body;

            $conversation->update([
                'step'    => 3,
                'context' => $context,
            ]);

            $this->whatsapp->sendText($phone, "Thanks. Send patient primary phone, or reply 'use my number':");
            return;
        }

        if ($step === 3) {
            $context['phone'] = (strtolower($body) === 'use my number') ? $phone : $body;

            // Call FastAPI EMR to create patient
            $patient = $this->emr->createPatient([
                'name'  => $context['name'],
                'dob'   => $context['dob'],
                'phone' => $context['phone'],
                // add required fields with defaults if needed
            ]);

            $id   = $patient['id']   ?? ($patient['patient_id'] ?? 'N/A');
            $name = $patient['name'] ?? $context['name'];

            $this->whatsapp->sendText(
                $phone,
                "✅ Patient created.\nName: {$name}\nID: {$id}\n\nType 'menu' for options."
            );

            $this->resetConversation($conversation);
            return;
        }

        // Any unexpected step → reset
        $this->resetConversation($conversation);
        $this->sendMenu($phone);
    }
}