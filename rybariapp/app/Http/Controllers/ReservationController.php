<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function ind()
    {
            $user = Auth::user();

            $reservation = $user->reservation;


            return view('Reservation', [ 'Reservation' => $reservation,
    ]);

    }


}
