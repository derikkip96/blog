<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {

        $this->middleware('guest', ['except'=>'destroy']);

    }

    public function store()
    {

        if (!auth()->attempt(request(['email', 'password']))) {

            return back()->withErrors([
                'message' => 'incorrect credentials'
            ]);

        }
        return redirect()->home();

    }
    public  function create()
    {
        return view('session.create');

    }
    //
    public function destroy()
    {
        auth()->logout();

        return redirect()->home();

    }

}
