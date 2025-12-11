<?php

namespace App\Http\Controllers;

use App\Services\BotService;
use Illuminate\Http\Request;

class WhatsAppWebhookController extends Controller
{
    public function __construct(
        private BotService $botService
    ) {}

    // GET /api/whatsapp/webhook - Meta verification
    public function verify(Request $request)
    {
        $mode      = $request->query('hub.mode');
        $token     = $request->query('hub.verify_token');
        $challenge = $request->query('hub.challenge');

        if ($mode === 'subscribe' &&
            $token === config('services.whatsapp.verify_token')) {
            return response($challenge, 200);
        }

        return response('Forbidden', 403);
    }

    // POST /api/whatsapp/webhook - incoming messages
    public function handle(Request $request)
    {
        $payload = $request->all();

        foreach ($payload['entry'] ?? [] as $entry) {
            foreach ($entry['changes'] ?? [] as $change) {
                $value    = $change['value'] ?? [];
                $messages = $value['messages'] ?? [];

                foreach ($messages as $message) {
                    if (($message['type'] ?? '') !== 'text') {
                        continue; // handle text only for MVP
                    }

                    $from = $message['from'];                 // WhatsApp number
                    $body = $message['text']['body'] ?? '';   // their message text

                    $this->botService->handleIncoming($from, $body, $value);
                }
            }
        }

        // WhatsApp expects 200 quickly
        return response()->json(['status' => 'ok']);
    }
}