<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommunityController extends Controller
{
    public function communities()
    {
        $communities = Community::all();
        return view('communities.index', compact('communities'));
    }

    // Menampilkan halaman form untuk membuat komunitas baru
    public function create()
    {
        return view('community.create-community');
    }

    // Menyimpan komunitas baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:30',
            'goals' => 'required',
            'category' => 'required',
            'description' => 'required|max:100',
            'location' => 'required',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'cover_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $community = new Community();
        $community->name = $request->name;
        $community->goals = $request->goals;
        $community->category = $request->category;
        $community->description = $request->description;
        $community->location = $request->location;

        // Upload profile photo
        if ($request->hasFile('profile_photo')) {
            $profilePath = $request->file('profile_photo')->store('profile_photos', 'public');
            $community->profile_photo = $profilePath;
        }

        // Upload cover photo
        if ($request->hasFile('cover_photo')) {
            $coverPath = $request->file('cover_photo')->store('cover_photos', 'public');
            $community->cover_photo = $coverPath;
        }

        $community->save();

        return redirect()->route('community.index')->with('success', 'Community created successfully!');
    }

    // Menampilkan daftar komunitas
    public function index()
    {
        $communities = Community::all();
        return view('community.community', compact('communities'));
    }
    //  public function showProfileUxid()
    //  {
    //    $communities = Community::all(); // Sesuaikan dengan model atau data yang ingin diambil
    //    return view('community.profile-uxid', ['communities' => $communities]);
    //  }
    // Menampilkan profil komunitas
    public function show(Request $request)
    {
        // Ambil ID dari parameter query string
        $id = $request->query('id');

        // Ambil data komunitas berdasarkan ID
        $community = Community::findOrFail($id);

        // Kirim data komunitas ke tampilan
        return view('community.profile-uxid', compact('community'));
    }


    // Fungsi untuk bergabung ke komunitas
    public function join($id)
    {
        $community = Community::findOrFail($id);
        $user = Auth::user();

        if (!$user->communities->contains($community)) {
            $user->communities()->attach($community);
        }

        return redirect()->back()->with('success', 'You have joined the community!');
    }

    // Fungsi untuk keluar dari komunitas
    public function leave($id)
    {
        $community = Community::findOrFail($id);
        $user = Auth::user();

        $user->communities()->detach($community);

        return redirect()->back()->with('success', 'You have left the community.');
    }

    public function toggleJoin($communityId)
    {
        $community = Community::findOrFail($communityId);
        $user = auth()->user();

        // Cek apakah user sudah bergabung dengan komunitas
        if ($user->communities->contains($communityId)) {
            // User leave komunitas
            $user->communities()->detach($communityId);
            $community->decrement('members_count');  // Kurangi jumlah anggota
        } else {
            // User join komunitas
            $user->communities()->attach($communityId);
            $community->increment('members_count');  // Tambah jumlah anggota
        }

        return back();
    }
}
