<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        $reservations = $user->Reservations;


            return view('dashboard', [ 'Reservations' => $reservations,
    ]);

    }


}

