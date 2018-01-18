<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    //
    public function create()
    {
        return view('registration.create');
    }


    public function store()
    {
        //validation of the form
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);


        //create user request/registeration and save
        $user= User::create(request(['name','email','password']));


        /////sign in /login user
        // request()->input;
        auth()->login($user);


        /////redirect to home page
        return redirect()->home();
        //return redirect('/pages');



    }
}
