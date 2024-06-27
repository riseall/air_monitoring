<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SensorData;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;

class SensorDataController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = SensorData::select('*');
            return datatables()->of($data)
                ->make(true);
        }

        return view('table');
    }

    public function newData()
    {
        $data = SensorData::latest('id')->first(); // Mengambil semua data sensor terbaru

        return view('test', compact('data'));
    }

    public function store(Request $request)
    {
        Log::info('Received data:', $request->all());

        $validated = $request->validate([
            'co2' => 'required|numeric',
            'no2' => 'required|numeric',
            'co' => 'required|numeric',
            'benzene' => 'required|numeric',
            'toluene' => 'required|numeric',
            'pm25' => 'required|numeric',
            'temperature' => 'required|numeric',
            'humidity' => 'required|numeric',
        ]);

        try {
            // Simpan data ke database
            SensorData::create([
                'tanggal' => Carbon::now(),
                'co2' => $validated['co2'],
                'no2' => $validated['no2'],
                'co' => $validated['co'],
                'benzene' => $validated['benzene'],
                'toluene' => $validated['toluene'],
                'pm25' => $validated['pm25'],
                'temperature' => $validated['temperature'],
                'humidity' => $validated['humidity'],
            ]);

            return response()->json(['message' => 'Data saved successfully'], 201);
        } catch (\Exception $e) {
            Log::error('Failed to save data:', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'Failed to save data'], 500);
        }
    }
}
