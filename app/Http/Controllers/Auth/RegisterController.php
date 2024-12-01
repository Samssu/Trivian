<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Menampilkan form register
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Melakukan register
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Jika validasi gagal, kembalikan ke form register
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Menyimpan user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login otomatis pengguna yang baru terdaftar
        auth()->login($user);

        // Mengarahkan ke halaman login setelah registrasi
        return redirect()->route('login')->with('status', 'Registration successful! Please log in.');
    }
}
