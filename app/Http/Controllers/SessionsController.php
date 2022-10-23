<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{


    public function create()
    {
        return view('sessions.create');
    }


    public function store()
    {

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if(!auth()->attempt($attributes))
        {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified'
            ]);
        }
        
        session()->regenerate();

        //redirect with a success flash message
        return redirect('/dashboard')->with('success', 'Welcome Back!');
        
    }


    public function destroy()
    {
        auth()->logout();

        return redirect('/login')->with('success', 'Goodbye!');
    }


}
