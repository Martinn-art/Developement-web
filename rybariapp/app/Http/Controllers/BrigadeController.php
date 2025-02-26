<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brigade;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class BrigadeController extends Controller
{
    public function index()
    {
    return view('brigade');
    }

    public function StoreBrigade(Request $request)
    {
        $user = Auth::user();

        $brigade = $user->brigade;

        $validated=$request->validate([
            'phone'=>['required','min:9','max:21'],
            'notes'=>['nullable'],
        ]);
        Brigade::create([
            'user_id'=>Auth::id(),
            'user_email'=>Auth::user()->email,
            'user_name'=>Auth::user()->name,
            'phone'=>$validated['phone'],
            'notes'=>$validated['notes'],

        ]);
        $user = User::where('id', Auth::id())->first();

        return view('Reservations',  ['brigade' =>$brigade], ['user' =>$user])->with('message','kontakt jsme obdrželi');
    }
}
