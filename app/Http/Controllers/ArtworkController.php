<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\Category;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    public function index(Request $request)
    {
        $query = Artwork::query();

        // Filter berdasarkan kategori
        if ($request->has('category')) {
            $query->where('category_id', $request->category);
        }

        // Filter berdasarkan lokasi
        if ($request->has('location')) {
            $query->where('location', $request->location);
        }

        return response()->json($query->with('category')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'location' => 'required|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('artworks', 'public');

        $artwork = Artwork::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'category_id' => $request->category_id,
            'location' => $request->location,
        ]);

        return response()->json(['message' => 'Artwork added successfully', 'artwork' => $artwork]);
    }

    public function share($id)
    {
        $artwork = Artwork::findOrFail($id);
        $shareLinks = [
            'twitter' => "https://twitter.com/intent/tweet?text=" . urlencode($artwork->title),
            'facebook' => "https://www.facebook.com/sharer/sharer.php?u=" . urlencode(route('artworks.show', $artwork->id)),
            'instagram' => "https://www.instagram.com/", // Instagram sharing requires mobile apps
        ];

        return response()->json(['share_links' => $shareLinks]);
    }
}
