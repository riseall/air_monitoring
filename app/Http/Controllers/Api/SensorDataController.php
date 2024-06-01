<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SensorData;
use Illuminate\Http\Request;

class SensorDataController extends Controller
{
    public function index()
    {
        $data = SensorData::all();

        return response()->json($data, 201);
    }
    public function store(Request $request)
    {
        $data = SensorData::create();

        return response()->json(['message' => 'Data stored successfully', 'data' => $data], 201);
    }
}
