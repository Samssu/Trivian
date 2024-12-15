<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Menampilkan form untuk membuat project
    public function create()
    {
        return view('Gallery.create-gallery');
    }

    // Menyimpan project ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'contributors' => 'nullable|string',
            'category' => 'required|string',
        ]);

        // Simpan cover image
        $coverImagePath = $request->file('cover_image')->store('cover_images', 'public');

        // Simpan gallery images jika ada
        $galleryImagePaths = [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                $galleryImagePaths[] = $image->store('gallery_images', 'public');
            }
        }

        // Simpan project ke database
        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'cover_image' => $coverImagePath,
            'gallery_images' => json_encode($galleryImagePaths),
            'contributors' => $request->contributors,
            'category' => $request->category,
            'user_id' => auth()->id(), // Pastikan user sudah login
        ]);

        return redirect()->route('gallery')->with('success', 'Project created successfully!');
    }

    // Menampilkan semua project di halaman gallery
    public function index()
    {
        $projects = Project::latest()->get();
        return view('Gallery.gallery', compact('projects'));
    }
    public function show($id)
    {
        // Cari proyek berdasarkan ID
        $project = Project::findOrFail($id);
        //
        $project = Project::with('user')->findOrFail($id);
        // Kembalikan proyek ke view
        return view('Gallery.profile-gallery-aws', compact('project'));
    }
}
