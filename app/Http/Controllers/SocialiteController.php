<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SocialiteController extends Controller
{
    // Redirect to Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle Google callback
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Autentikasi berdasarkan email saja
            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                return redirect()->route('login')->withErrors('User not registered.');
            }

            Auth::login($user, true);
            return redirect()->route('home');
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors('Login with Google failed.');
        }
    }

    // Redirect to LinkedIn
    public function redirectToLinkedIn()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    // Handle LinkedIn callback
    public function handleLinkedInCallback()
    {
        try {
            $linkedinUser = Socialite::driver('linkedin')->user();

            // Autentikasi berdasarkan email saja
            $user = User::where('email', $linkedinUser->getEmail())->first();

            if (!$user) {
                return redirect()->route('login')->withErrors('User not registered.');
            }

            Auth::login($user, true);
            return redirect()->route('home');
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors('Login with LinkedIn failed.');
        }
    }
}
