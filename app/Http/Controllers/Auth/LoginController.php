<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Melakukan login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('edit-profile');
        }

        return redirect()->back()->withErrors(['email' => 'These credentials do not match our records.']);
    }

    // Melakukan logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
