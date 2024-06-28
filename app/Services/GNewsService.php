<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GNewsService
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = env('GNEWS_API_KEY');
        $this->baseUrl = 'https://gnews.io/api/v4';
    }

    public function getNews($query, $lang = 'en', $country = 'us', $max = 30)
    {
        $response = Http::get("{$this->baseUrl}/search", [
            'q' => $query,
            'lang' => $lang,
            'country' => $country,
            'max' => $max,
            'token' => $this->apiKey,
        ]);

        return $response->json();
    }

    public function getAQINews($lang = 'en', $country = 'us', $max = 30)
    {
        return $this->getNews('air pollution monitoring', $lang, $country, $max);
    }
}
