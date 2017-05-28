<?php

namespace App\Http\Controllers;


class SessionsController extends Controller
{

    public function __construct() {

        $this->middleware('guest')->except(['destroy']);
    }

    public function create() {

        return view('sessions.login');
    }

    public function store() {

        if (! auth()->attempt(request(['email', 'password'])))
        {
            return back()->withErrors([
                'message' => 'Please check your email or password and try again.'
            ]);
        }

        return redirect()->home();
    }

    public function destroy() {

        auth()->logout();

        return redirect()->home();
    }
}
