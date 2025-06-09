<?php

namespace App\Http\Controllers;

use App\Models\IdealProject;
use App\Models\SocialScore;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use League\Flysystem\ResolveIdenticalPathConflict;
use phpDocumentor\Reflection\Types\Null_;

class FormController extends Controller
{
    public function viewBytVidet()
    {
        return view('/bytVidet');
    }
    public function UlozMe(Request $request)
{
    if (!empty($request->input('email_confirmed'))) {
    abort(403, 'Přístup zamítnut');
}

  $validated = $request->validate([
    'meta' => 'required|integer|min:0|max:100',
    'insta' => 'required|integer|min:0|max:100',
    'x' => 'required|integer|min:0|max:100',
    'google' => 'required|integer|min:0|max:100',
    'vlastni_sit' => 'nullable|string|max:500',
  ]);
 //do DB

 SocialScore::create([
    'meta' => $validated['meta'],
    'insta' => $validated['insta'],
    'x' => $validated['x'],
    'google' => $validated['google'],
    'vlastni_sit' => $validated['vlastni_sit'] ?? null,
  ]);

  return redirect()->back()->with('success', 'Hodnocení bylo uloženo!');




}
public function viewObsah()
  {
    return view('Obsah');
  }

  public function FormC(Request $request)
    {
    if (!empty($request->input('email_confirmed'))) {
    abort(403, 'Přístup zamítnut');
        }

    $form =$request->validate([
        'vybrane_moznosti'=>'string|nullable',
        'VlastniNapad'=>'string|nullable',
    ]);

    IdealProject::create([
        'vybrane_moznosti' =>$form['vybrane_moznosti'] ?? null,
        'VlastniNapad' =>$form['VlastniNapad'] ?? null,

    ]);

    return redirect()->back()->with('success', 'Hodnocení bylo uloženo!');

  }
}
