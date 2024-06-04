<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SensorDataController;

Route::get('/', function () {
    return view('test');
});

Route::get('data', [SensorDataController::class, 'index']);
