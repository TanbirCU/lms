<?php
// app/Services/ZoomService.php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Firebase\JWT\JWT;

class ZoomService
{
    protected $baseUrl = 'https://api.zoom.us/v2';
    protected $jwtToken;

    public function __construct()
    {
        $this->jwtToken = $this->generateJWT();
    }

    protected function generateJWT()
    {
        $key = config('services.zoom.key');
        $secret = config('services.zoom.secret');

        return JWT::encode([
            'iss' => $key,
            'exp' => time() + 3600
        ], $secret, 'HS256');
    }

    public function createMeeting($topic, $startDateTime)
    {
        $response = Http::withToken($this->jwtToken)
            ->post($this->baseUrl . '/users/' . config('services.zoom.user_id') . '/meetings', [
                'topic' => $topic,
                'type' => 2,
                'start_time' => Carbon::parse($startDateTime)->toIso8601String(),
                'duration' => 60,
                'timezone' => 'Asia/Dhaka',
                'settings' => [
                    'join_before_host' => true,
                    'mute_upon_entry' => true,
                ]
            ]);

        if ($response->failed()) {
            logger()->error('Zoom error', [
                'status' => $response->status(),
                'body' => $response->json(),
            ]);
        }

        return $response->json();
    }

}