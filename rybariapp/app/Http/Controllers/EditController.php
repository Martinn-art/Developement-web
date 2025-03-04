<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EditController extends Controller

{
    public function index()
    {
        $reservations = Reservation::where('user_id', Auth::id())->get();

        $user = User::where('id', Auth::id())->first();

        return view('EditForm', compact('reservations'));



    }
    public function edit($id)
    {
        // Načítáme model podle ID
        $post = Post::findOrFail($id); // Pokud příspěvek neexistuje, vyhodí 404 chybu

        // Vrátíme zobrazení formuláře a předáme proměnnou
        return view('EditForm', compact('post'));
    }



    public function update(Request $request, $id)
    {
        $reservations = Reservation::where('user_id', Auth::id())->get();

        $user = User::where('id', Auth::id())->first();

        $reservations = Reservation::all();

        $user = User::where('id', Auth::id())->first();

        $reservations = $user->reservations;

        $reservations = Reservation::findOrFail($id);

        $request -> validate([
            'date' => ['required','date','after:today'],
            'title' => ['required'],
            'description' => ['nullable'],
        ], [
            'date.required' => 'Zadej datum, kdy si vyzvedneš povolenku',
            'date.after:todate' => 'Zadej budoucí datum',
            'title.required' => 'Zadej jakou povolenku',


        ]);

        $reservations->date = $request->input('date');
        $reservations->title = $request->input('title');
        $reservations->description = $request->input('description');
        $reservations->save();
        return redirect()->route('IndexRes');


    }
}
