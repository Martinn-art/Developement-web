<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\StartController;


Route::get('/UvodMarNet', [StartController::class, 'view'])->name('home');
Route::get('/dashboard', [StartController::class, 'uvod'])->name('uvod');
Route::get('/VCemPracuji', [StartController::class, 'viewVCem']);
Route::get('/Kontakty', [StartController::class, 'Kontakt']);
Route::get('/NapadumSeMezeNekladou', [StartController::class, 'JedenNapad']);
Route::get('/Moznosti', [StartCOntroller::class, 'viewMoznosti']);
Route::get('/bytVidet', [FormController::class, 'viewBytVidet']);
Route::get('/Obsah', [FormController::class, 'viewObsah']);

Route::post('/bytVidet', [FormController::class, 'UlozMe'])->name('form');
Route::post('/Obsah', [FormController::class, 'FormC'])->name('formC');


Route::view('', 'dashboard');

/*
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard'); */
/*
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
*/
