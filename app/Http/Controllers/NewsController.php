<?php

namespace App\Http\Controllers;

use App\Models\SensorData;
use App\Services\GNewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $gnewsService;

    public function __construct(GNewsService $gnewsService)
    {
        $this->gnewsService = $gnewsService;
    }

    public function index(Request $request)
    {
        $news = $this->gnewsService->getAQINews();
        $data = SensorData::latest('id')->first(); // Mengambil semua data sensor terbaru

        $latestTemperature = $data->temperature;
        $dataTemp = [
            $latestTemperature, // latest temperature
            50 - $latestTemperature // 50 minus the latest temperature
        ];

        // Calculate the values for dataHumi
        $latestHumidity = $data->humidity;
        $dataHumi = [
            $latestHumidity, // latest humidity
            100 - $latestHumidity // 100 minus the latest humidity
        ];

        return view('user-das', compact('data', 'news', 'dataTemp', 'dataHumi'));
    }


    public function search(Request $request)
    {
        $query = $request->input('query', 'latest');
        $max = $request->input('max', 30); // default to 30 if not provided
        $news = $this->gnewsService->getNews($query, 'en', 'us', $max);

        return view('user-das', compact('news'));
    }
}
