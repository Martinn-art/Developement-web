<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class AuthController extends Controller
{

 public function index()
 {
    return view('register');
 }


    public function login()
{
return view('login');

}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => ['required', 'min:5'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'min:8'],
    ],[
        'name.required' => 'napiš jméno!',
        'name.min' => 'pole jméno vyžaduje 5 znaků',
        'email.required' => 'napiš email!',
        'email.unique' => 'tento email je již v systému evidován',
        'password.required' => 'napiš heslo!',
        'password.min' => 'napiš heslo v délce aspoň 8 znaků',

    ]);

        $use = User::create([
            "name" => $validated['name'],
            "email" => $validated['email'],
            "password" => $validated['password'],
        ]);

    return redirect('/register')-> with('message', 'Registrace proběhla v pořádku');
}

public function authenticate(Request $request): RedirectResponse
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],

    ]);
if (Auth::attempt($credentials)) {
$request->session()->regenerate();

    return redirect()->intended('dashboard');

}
return back()->withErrors([
    'email' => 'Nesprávný email nebo heslo',

])->onlyInput('email');


}


}
