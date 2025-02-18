<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function index()
    {
        return view('register');
    }

public function store(Request $request)
{
    $user= User::create([
        "name"=>$request->name,
        "email"=>$request->email,
        "password"=>$request->password,


    ]);


}
}
