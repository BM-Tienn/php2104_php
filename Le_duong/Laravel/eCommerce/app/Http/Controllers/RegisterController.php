<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAccounts;

class RegisterController extends Controller
{
    //Load form register form
    public function create()
    {
        return view('pages.register');
    }

    //Save data to db
    public function register(Request $request)
    {
    $first_name = $request->input('first_name');
    $last_name = $request->input('last_name');
    $email = $request->input('email');
    $password = $request->input('password');

    $validateData = $request->validate([
      'first_name' => ['required','max:10'],
      'last_name' => ['required','max:10'],
      'email' => ['required','max:100','email'],
      'password' => ['required','confirmed','between:8,32'],
      'password_confirmation' => ['required']
    ]);

    $validator = \Validator::make($validateData,[$first_name,$last_name,$email,$password]);

    if($validator->fails()) {
      return redirect()::back()->withInput()->withErrors($validator->error());
    } else {
      $account = new AdminAccounts();
      $account->first_name = $first_name;
      $account->last_name = $last_name;
      $account->email = $email;
      $account->password = bcrypt($password);
      $account->save();
      return redirect('/account');
    }

    }
}
