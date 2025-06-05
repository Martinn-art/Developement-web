<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
public function uvod ()
{
    return view('dashboard');

}

    public function view ()
    {
        return view ('UvodMarNet');
    }

    public function viewVCem ()

{
return view ('VCemPracuji');

}

public function Kontakt ()
{
    return view ('Kontakty');
}

}

