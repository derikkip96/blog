<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Mail\Welcome;


class RegistrationController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        return view('registration.create');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
       $user= User::create([
           'name' => request('name'),
           'email' => request('email'),
           'password' => Hash::make(request('password'))

        ]);
       auth()->login($user);
       Mail::to($user)->send(new Welcome);
       session()->flash('message', 'thank you for registering with us');
       return redirect()->home();

    }
}
