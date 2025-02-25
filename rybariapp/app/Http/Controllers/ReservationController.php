<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        $reservations = $user->Reservation;


            return view('dashboard', [ 'Reservations' => $reservations,
    ]);


    }
    public function dashboardForm()
    {
                return view('dashboardForm');

    }

    public function StoreForm(Request $request)
    {
        $validated = $request->validate([
            'date' => ['required','date','after:today'],
            'title' => ['required'],
            'description' => ['nullable'],
        ]);
        $reservation = Reservation::create([
            'date' => $validated['date'],
            'title' => $validated ['title'],
            'description' => $validated['description'],
            'user_id' => auth::id(),
        ]);
        return view('dashboardView')-> with('message', 'Rezervace proběhla v pořádku');


    }

    public function TableView()
{
    return view('dashboardView');

}


}

