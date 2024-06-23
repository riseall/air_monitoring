<?php

use App\Http\Controllers\Api\SensorDataController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
})->middleware(['auth', 'verified'])->name('dashboard');;

Route::get('/tabel', function () {
    return view('table');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/data', [SensorDataController::class, 'index'])->name('data');
Route::get('/', [SensorDataController::class, 'newData'])->name('new.data');
Route::get('/chart1/data', [ChartController::class, 'getBar'])->name('chart1.data');
Route::get('/chart/data', [ChartController::class, 'getData'])->name('chart.data');

require __DIR__ . '/auth.php';
