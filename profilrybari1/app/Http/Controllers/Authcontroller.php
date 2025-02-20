<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use resources\views\Components;

class Authcontroller extends Controller
{
    public function index()
    {
        return view('register');
    }

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',



    ]);


    $user= User::create([
        "name"=>$request->name,
        "email"=>$request->email,
        "password"=>$request->password,


    ]);

    return redirect('/register')->with('message', 'Registrace proběhla v pořádku');
}
}
