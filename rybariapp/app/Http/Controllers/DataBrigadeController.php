<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Brigade;

class DataBrigadeController extends Controller
{
public function DataB ()
{

    $reservations = Reservation::where('user_id', Auth::id())->get();

    $user = User::where('id', Auth::id())->first();

    $brigade = Brigade::where('user_id', Auth::id())->get();

    $brigadePosts = [];
    foreach ($brigade as $brig) {
        $brigadePosts[] = $brig->posts;
    }

    return view('Reservations', compact('reservations', 'user', 'brigade', 'brigadePosts'));
}
 




}
