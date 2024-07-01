<?php

use App\Http\Controllers\Api\SensorDataController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user', function () {
    return view('user');
});

Route::get('/kualitas', function () {
    return view('kualitas');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/user-data', [UserController::class, 'getUserData'])->name('user.data');
Route::get('/data', [SensorDataController::class, 'index'])->name('data');
Route::get('/dashboard', [SensorDataController::class, 'newData'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/chart1/data', [ChartController::class, 'getBar'])->name('chart1.data');
Route::get('/chart/data', [ChartController::class, 'getData'])->name('chart.data');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/', [NewsController::class, 'index'])->name('welcome');

require __DIR__ . '/auth.php';
