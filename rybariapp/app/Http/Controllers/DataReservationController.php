<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DataReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::where('user_id', Auth::id())->get();

       $user = User::where('id', Auth::id())->first();

       

        return view('dashboardView', compact('reservations','user'));

    }


}
