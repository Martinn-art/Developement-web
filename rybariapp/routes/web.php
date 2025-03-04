<?php

use Illumiate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\DataReservationController;
use App\Http\Controllers\BrigadeController;
use App\Http\Controllers\DataBrigadeController;
use App\Http\Controllers\ShowBrigadeController;
use App\Http\Controllers\EditController;


Route::get('/register', [AuthController::class, 'index']);

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [ReservationController::class, 'index']);
    Route::get('/dashboardForm', [ReservationController::class, 'dashboardFor']);
    Route::post('/dashboardView', [ReservationController::class, 'StoreForm']);
    Route::get('/dashboardView', [DataReservationController::class, 'index']);
    Route::get('/brigade', [ShowBrigadeController::class, 'index'])->name('brigade.index');
    Route::post('/brigade', [BrigadeController::class, 'store'])->name('store.brigade');
    Route::get('/Reservations', [DataBrigadeController::class, 'DataB']);
    Route::get('/EditForm', [EditController::class, 'index'])->name('IndexRes');
    Route::post('/EditForm', [EditController::class, 'update'])->name('EditRes');
    Route::put('/edit/{id}', [EditController::class, 'update'])->name('edit.update');
    Route::get('/LogOutPage0', [AUthcontroller::class, 'logOutPage'])->name('LogOut');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});



Route::post('/register', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/', [StartController::class, 'redi']);
