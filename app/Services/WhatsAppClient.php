<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhatsAppClient
{
    public function sendText(string $to, string $text): void
    {
        $url = sprintf(
            '%s/%s/messages',
            rtrim(config('services.whatsapp.api_url'), '/'),
            config('services.whatsapp.phone_number_id')
        );

        $payload = [
            'messaging_product' => 'whatsapp',
            'to'                => $to,
            'type'              => 'text',
            'text'              => ['body' => $text],
        ];

        $response = Http::withToken(config('services.whatsapp.access_token'))
            ->post($url, $payload);

        if ($response->failed()) {
            Log::error('WhatsApp sendText failed', [
                'to'       => $to,
                'payload'  => $payload,
                'status'   => $response->status(),
                'response' => $response->body(),
            ]);
        }
    }
}