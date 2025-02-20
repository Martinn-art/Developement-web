<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/register', [AuthController::class, 'index']);
Route::post('/register', [AuthController::class, 'store']);
