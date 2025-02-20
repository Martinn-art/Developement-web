<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;




Route::get('/', [AuthController::class, 'index']);


Route::get('/register', [Authcontroller::class, 'store']);

