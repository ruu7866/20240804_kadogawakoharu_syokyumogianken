<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function login()
  {
    return view('login');
  }
}

  public function stamp(Request $request)
  {
    $contact = $request->only(['email', 'passward']);
    return view('stamp', ['contact' => $contact]);

}