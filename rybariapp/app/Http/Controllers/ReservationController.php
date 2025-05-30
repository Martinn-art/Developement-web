<?php

namespace App\Http\Controllers;

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
        $User = Auth::user();

        $reservations = $User->reservations;


         return view('dashboard', ['reservations' => $reservations]);

    }

    public function dashboardFor()
    {


         return view('dashboardForm');
    }


    public function StoreForm(Request $request)



    {
        $user = Auth::user();

        $reservations = Reservation::where('user_id', Auth::id())->get();

        $user = User::where('id', Auth::id())->first();

        $reservations = $user->reservations;

        $validated = $request->validate([
            'date' => ['required','date','after:today'],
            'title' => ['required'],
            'description' => ['nullable'],
        ], [
            'date.required' => 'Zadej datum, kdy si vyzvedneš povolenku',
            'date.after:todate' => 'Zadej budoucí datum',
            'title.required' => 'Zadej jakou povolenku',
        ]);

        Reservation::create([
            'date' => $validated['date'],
            'title' => $validated ['title'],
            'description' => $validated['description'],
            'user_id' => Auth::id(),
        ]);

        $user = User::where('id', Auth::id())->first();

        return view('dashboardView', ['reservations' => $reservations],['user' => $user])->with('message', 'Rezervace proběhla v pořádku');


    }


}

