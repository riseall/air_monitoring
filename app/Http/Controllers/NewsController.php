<?php

namespace App\Http\Controllers;

use App\Models\SensorData;
use App\Services\GNewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    // protected $gnewsService;

    // public function __construct(GNewsService $gnewsService)
    // {
    //     $this->gnewsService = $gnewsService;
    // }

    public function index(Request $request)
    {
        //$news = $this->gnewsService->getAQINews();
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

        // add 'news' >
        return view('welcome', compact('data', 'dataTemp', 'dataHumi'));
    }
}
