<?php

use App\Http\Controllers\Api\SensorDataController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

Route::get('/kualitas', function () {
    return view('kualitas');
});

Route::get('/data', [SensorDataController::class, 'index'])->name('data');
Route::get('/', [SensorDataController::class, 'newData'])->name('new.data');
Route::get('/chart1/data', [ChartController::class, 'getBar'])->name('chart1.data');
Route::get('/chart/data', [ChartController::class, 'getData'])->name('chart.data');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/news', [NewsController::class, 'search'])->name('news.search');
