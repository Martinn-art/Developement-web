<?php

use Illumiate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StartController;

Route::get('/register', [AuthController::class, 'index']);

Route::get('/login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'authenticate']);});

Route::post('/register', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/', [StartController::class, 'redi']);
