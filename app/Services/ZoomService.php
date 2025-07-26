<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class ZoomService
{
    protected $baseUrl = 'https://api.zoom.us/v2';
    protected $accessToken;

    public function __construct()
    {
        $this->accessToken = $this->getAccessToken();
    }

    protected function getAccessToken()
    {
        $clientId = config('services.zoom.client_id');
        $clientSecret = config('services.zoom.client_secret');
        $accountId = config('services.zoom.account_id');

        if (!$clientId || !$clientSecret || !$accountId) {
            throw new \Exception("Zoom credentials missing. Check .env and config/services.php");
        }

        $url = "https://zoom.us/oauth/token?grant_type=account_credentials&account_id={$accountId}";

        $response = Http::withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded',
        ])->withBasicAuth($clientId, $clientSecret)
        ->post($url);

        if ($response->failed()) {
            logger()->error('Zoom OAuth Error', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
            throw new \Exception('Failed to get Zoom access token: ' . $response->body());
        }

        return $response->json()['access_token'];
    }




    public function createMeeting($topic, $startDateTime)
    {
        $response = Http::withToken($this->accessToken)
            ->post($this->baseUrl . '/users/' . config('services.zoom.user_id') . '/meetings', [
                'topic' => $topic,
                'type' => 2,
                'start_time' => Carbon::parse($startDateTime)->toIso8601String(),
                'duration' => 60,
                'timezone' => 'Asia/Dhaka',
                'settings' => [
                    'join_before_host' => true,
                    'mute_upon_entry' => true,
                    'waiting_room' => false,
                ]
            ]); 
        if ($response->failed()) {
            logger()->error('Zoom meeting create error', $response->json());
            throw new \Exception('Failed to create Zoom meeting');
        }

        return $response->json($response);
    }
}
