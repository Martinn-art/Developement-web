<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brigade;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;



class BrigadeController extends Controller
{


    public function store(Request $request)
    {
            $validated = $request->validate([
            'phone'=>['required','min:9','max:21'],
            'notes'=>['nullable'],
        ], [
            'phone.required' => 'napiš telefonní číslo',
            'phone.min:9' => 'napiš telefonní číslo o délce alespoň 9 znaků',
            'phone.max:21' => 'napiš telefonní číslo ale ne delší než 21 znaků!',
        ]);

            $brigade = Brigade::create([
            'user_id'=>Auth::id(),
            'user_email'=>Auth::user()->email,
            'user_name'=>Auth::user()->name,
            'phone'=>$validated['phone'],
            'notes'=>$validated['notes'] ?? null,
        ]);

        return redirect()->route('brigade.index')->with('message', 'kontakt jsme obdrželi');


    }

}
