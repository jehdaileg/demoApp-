<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function login()
    {
        return Inertia::render('Auth/Login');
    }

    public function store(Request $request)
    {

        $credentials = $request->validate([

            'email' => 'required|email',
            'password' => 'required'

        ]);

        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            return redirect()->intended('/');

        }

        return back()->withErrors([

            'email' => 'The credentials do not much !'

        ]);


    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->route('login');
    }




}
