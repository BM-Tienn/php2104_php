<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    protected $profilemodel;

    public function __construct(Profile $profile)
    {
        $this->profilemodel = $profile;
    }

    /* 
    * return all user profile 
    */
    public function index()
    {
     $profiles = $this->profilemodel->paginate(config('profile.paginate8'));
     
     return view('my-directory.profile',[
         'profiles' => $profiles,
     ]);
    }

    /* 
    * return single user profile 
    */
    public function show($id = 1)
    {
     $profile = $this->profilemodel::findOrFail($id);
     
     return view('my-directory.profile-single-ms',[
         'profile' => $profile,
     ]);
    }

}