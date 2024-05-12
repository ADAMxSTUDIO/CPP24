<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show the form for login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Login process.
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('membres.index'));
        } else {
            return back()->withErrors(['email' => 'The provided credentials do not match our records.'])->withInput($request->only('email'));
        }
    }
}
