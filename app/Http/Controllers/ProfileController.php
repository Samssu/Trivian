<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        // Ambil data user yang sedang login
        $user = Auth::user();

        // Kirim data user ke view
        return view('profile.profile', ['user' => $user]);
        return view('profile.edit-profile', ['user' => $user]);
    }
    // Menampilkan halaman edit-profile
    public function editProfile()
    {
        // Mengambil data user yang sedang login
        $user = User::findOrFail(Auth::id());

        // Mengirim data user ke view 'profile.edit-profile'
        return view('profile.edit-profile', compact('user'));
    }
    // Menampilkan halaman edit profil

}
