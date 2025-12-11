<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class EmrApiClient
{
    protected function client()
    {
        $baseUrl = rtrim(config('services.emr.base_url'), '/');

        $http = Http::baseUrl($baseUrl);

        if (config('services.emr.token')) {
            $http = $http->withToken(config('services.emr.token'));
        }

        return $http;
    }

    public function health(): array
    {
        // adjust if you have a different health endpoint
        return $this->client()->get('/health')->json();
    }

    public function createPatient(array $data): array
    {
        // match your FastAPI Patients create endpoint path
        $response = $this->client()->post('/patients', $data);

        return $response->throw()->json();
    }

    public function getPatientSummaryByPhone(string $phone): ?array
    {
        // adjust to your actual search endpoint
        $response = $this->client()->get('/patients/search', [
            'phone' => $phone,
        ]);

        if ($response->status() === 404) {
            return null;
        }

        return $response->throw()->json();
    }

    // later: startEncounter(), addVitals(), listPayments(), generateClaim(), etc.
}