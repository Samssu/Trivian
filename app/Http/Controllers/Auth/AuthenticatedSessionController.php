<?php

// app/Http/Controllers/Auth/AuthenticatedSessionController.php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle the logout request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Auth::logout(); // Menghapus sesi login
        $request->session()->invalidate(); // Menghapus sesi pengguna
        $request->session()->regenerateToken(); // Mengganti token CSRF

        return redirect('/'); // Redirect ke halaman utama setelah logout
    }
}