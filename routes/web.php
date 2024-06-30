<?php

use App\Http\Controllers\Api\SensorDataController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/user', function () {
    return view('user-das');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/kualitas', function () {
    return view('kualitas');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/data', [SensorDataController::class, 'index'])->name('data');
Route::get('/user', [SensorDataController::class, 'newData'])->name('new.data');
Route::get('/chart1/data', [ChartController::class, 'getBar'])->name('chart1.data');
Route::get('/chart/data', [ChartController::class, 'getData'])->name('chart.data');

Route::get('/user', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/news', [NewsController::class, 'search'])->name('news.search');

require __DIR__ . '/auth.php';
