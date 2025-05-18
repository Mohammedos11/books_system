<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    function showloginPage()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {

        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
        );

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'message' => 'Email Addrees or Password is Not Correct !'
            ]);
        }

        if (auth()->user()->role == "admin") {
            return redirect()->route('dashboard');
        } else {
            return 'You Are User Not Authorized !';
        }
    }


    function logout()
    {
        auth()->logout();
        return redirect('/login')->with('success', 'You have been logged out');
    }
}
