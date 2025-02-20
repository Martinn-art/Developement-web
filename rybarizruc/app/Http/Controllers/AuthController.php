<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function index()
    {
        return view('register');

    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $user = User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$request->password,

        ]);



return redirect('/register')->with('message', 'Registrace proběhla úspěšně');
}
}
