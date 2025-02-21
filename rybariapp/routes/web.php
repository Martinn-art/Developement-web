<?php

use Illumiate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/register', [AuthController::class, 'index']);

Route::get('/login', [AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'authenticate']);
