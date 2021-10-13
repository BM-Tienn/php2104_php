<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
      return view('pages.login');
    }

    public function login(Request $request)
    {
      $valiDate = $request->validate([
        'email' => ['required', 'email', 'max:100'],
        'password' => ['required', 'between:8,32']
      ]);

      if (Auth::attempt($valiDate)) {
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
      }
      return back();
    }
}
