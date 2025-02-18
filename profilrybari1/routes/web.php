<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;



Route::get('/', [Authcontroller::class, 'store']);
