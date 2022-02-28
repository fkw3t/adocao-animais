<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register($provider)
    {
        if(Auth::check())
        {
            return redirect()->route('home');
        }

        $providers = ['user', 'ong'];

        if(!in_array($provider, $providers)){
            return throw new Exception("Invalid provider.");
        }

        return view('auth.register', ['provider' => $provider]);

    }

    public function getLoginPage($provider)
    {
        if(Auth::check())
        {
            return redirect()->route('home');
        }

        $providers = ['user', 'ong'];
        if(!in_array($provider, $providers)){
            return throw new Exception("Invalid provider.");
        }

        return view('auth.login', ['provider' => $provider]);
    }

    public function login($provider, Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);
        
        if($provider === "user"){

            if (Auth::guard('user')->attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('/'); 
    
            }
            return back()->withErrors([
                'email' => 'Invalid credentials.',
                'password' => 'Invalid credentials.'
            ]);
        }
        else if($provider === "ong"){

            if (Auth::guard('ong')->attempt($credentials)){
                $request->session()->regenerate();
                
                return redirect()->intended('/');
            }
            return back()->withErrors([
                'email' => 'Invalid credentials.',
                'password' => 'Invalid credentials.'
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        Auth::guard('ong')->logout();

        return redirect('/');
    }
}