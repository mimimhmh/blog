<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegistrationRequest;
use App\Mail\Welcome;
use App\User;

class RegistrationController extends Controller
{

    public function __construct() {

        $this->middleware('guest');
    }

    public function create() {

        return view('sessions.register');
    }

    public function store(RegistrationRequest $request) {


        $user = User::create([
            'name'     => request('name'),
            'email'    => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        return redirect()->home();
    }
}
