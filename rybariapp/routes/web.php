<?php

use Illumiate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\DataReservationController;
use App\Http\Controllers\BrigadeController;
use App\Http\Controllers\DataBrigadeController;



Route::get('/register', [AuthController::class, 'index']);

Route::get('/login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [ReservationController::class, 'index']);
    Route::get('/dashboardForm', [ReservationController::class, 'dashboardFor']);
    Route::post('/dashboardView', [ReservationController::class, 'StoreForm']);
    Route::get('/dashboardView', [DataReservationController::class, 'index']);
    Route::get('/brigade', [BrigadeController::class, 'index']);
    Route::post('/brigade', [BrigadeController::class, 'StoreBrigade']);
    Route::get('/Reservations', [DataBrigadeController::class, 'DataB']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});



Route::post('/register', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/', [StartController::class, 'redi']);
