<?php

namespace App\Http\Controllers\Api;

use App\Events\SensorDataUpdated;
use App\Http\Controllers\Controller;
use App\Models\SensorData;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

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

        return view('dashboard', compact('data'));
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
            $sensorData = SensorData::create([
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

            event(new SensorDataUpdated($sensorData));

            return response()->json(['message' => 'Data saved successfully'], 201);
        } catch (\Exception $e) {
            Log::error('Failed to save data:', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'Failed to save data'], 500);
        }
    }

    public function getPrediction(Request $request)
    {
        $client = new Client();
        $response = $client->post('http://localhost:5000/predict', [
            'json' => [
                'co2' => $request->input('co2'),
                'no2' => $request->input('no2'),
                'co' => $request->input('co'),
                'benzene' => $request->input('benzene'),
                'toluene' => $request->input('toluene'),
                'pm25' => $request->input('pm25'),
                'temperature' => $request->input('temperature'),
                'humidity' => $request->input('humidity')
            ]
        ]);

        $body = $response->getBody();
        $result = json_decode($body, true);

        // Menyimpan nilai AQI dan kategori ke database
        $sensor = new SensorData();
        $sensor->tanggal = Carbon::now()->input('tanggal');
        $sensor->co2 = $request->input('co2');
        $sensor->no2 = $request->input('no2');
        $sensor->co = $request->input('co');
        $sensor->benzene = $request->input('benzene');
        $sensor->toluene = $request->input('toluene');
        $sensor->pm25 = $request->input('pm25');
        $sensor->temp = $request->input('temperature');
        $sensor->humidity = $request->input('humidity');
        $sensor->aqi = $result['aqi'];
        $sensor->category = $result['category'];
        $sensor->save();

        return response()->json($result);
    }
}
