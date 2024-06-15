<?php

namespace App\Http\Controllers;

use App\Models\SensorData;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function getBar(Request $request)
    {
        $parameter1 = $request->get('parameter1');
        $data = $this->getBarData($parameter1);

        return response()->json($data);
    }

    private function getBarData($parameter1)
    {
        $sensorData = SensorData::select('created_at', $parameter1)
            ->orderBy('created_at', 'desc')
            ->limit(30)
            ->get()
            ->reverse(); // Membalikkan urutan data agar data terbaru berada di paling bawah

        // Format data untuk Chart.js
        $labels = $sensorData->pluck('created_at')->map(function ($date) {
            return $date->format('H:i:s'); // Format waktu sebagai label
        });
        $values = $sensorData->pluck($parameter1);

        return [
            'labels' => $labels,
            'values' => $values,
            'parameter1' => strtoupper($parameter1),
        ];
    }


    public function getData(Request $request)
    {
        $parameter = $request->get('parameter');
        $data = $this->getChartData($parameter);

        return response()->json($data);
    }

    private function getChartData($parameter)
    {
        $sensorData = SensorData::select('created_at', $parameter)
            ->orderBy('created_at', 'desc')
            ->limit(1080)
            ->get()
            ->reverse(); // Membalikkan urutan data agar data terbaru berada di paling bawah

        // Format data untuk Chart.js
        $labels = $sensorData->pluck('created_at')->map(function ($date) {
            return $date->format('H:i:s'); // Format waktu sebagai label
        });
        $values = $sensorData->pluck($parameter);

        return [
            'labels' => $labels,
            'values' => $values,
            'parameter' => strtoupper($parameter),
        ];
    }
}
