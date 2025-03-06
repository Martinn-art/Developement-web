<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Brigade;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    public function admin(Request $request, Closure $next)
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
