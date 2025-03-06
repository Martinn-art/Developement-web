<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Brigade;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function admin(Request $request)
    {

        if(Auth::check() && Auth::user()->role !== 'admin')

        {
            return abort(403);
        }

        $users = Auth::user();


        $reservations = Reservation::with('user')->get();
        $brigades = Brigade::with('user')->get();


        return view('AdminPage', compact('reservations', 'users', 'brigades'));
    }

}


