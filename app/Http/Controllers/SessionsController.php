<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{


        public function __construct()   // we make middleware first because if it authenticate user ,
                                            // don't need to access create(),store() methods
        {

            $this->middleware('guest',['except' => 'destroy']);

        }


    public function create()
    {
        return view('sessions.create');

    }

    // Attempt to authenticate the user
    //if not redirect back
    //if so make him sign in
    //redirect to home page again
    public function store()
    {
        if(! auth()->attempt(request(['email','password'])))   // if you entered error password.
        {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again'
            ]);
        }


        return redirect()->home();
        // return redirect('/pages');

    }



    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
        // return redirect('/pages');
    }
}
