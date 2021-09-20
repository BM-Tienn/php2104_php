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
//      $validateData = $request->validate([
//        'email' => ['required','max:100','email'],
//        'password' => ['required','between:8,32'],
//      ]);

      $data = $request->only('email', 'password');
      if(Auth::attempt($data)) {
        return redirect()->route('dashboard');
      } else {
        return redirect()->route('login');
      }
    }

}
