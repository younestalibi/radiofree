<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    // Display a listing of podcasts
    public function index()
    {
        $podcasts = Podcast::all();
        return view('podcasts.index', compact('podcasts'));
    }

    // Show the form for creating a new podcast
    public function create()
    {
        return view('podcasts.create');
    }

    // Store a newly created podcast in the database
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',

            'link' => 'required|url',
        ]);

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('uploads', 'public');
            $data['thumbnail'] = $thumbnailPath;
        }
        Podcast::create($data);

        return redirect()->route('podcasts.index')->with('success', 'Podcast created successfully.');
    }

    // Show the form for editing the specified podcast
    public function edit($id)
    {
        $podcast = Podcast::findOrFail($id);
        return view('podcasts.edit', compact('podcast'));
    }

    // Update the specified podcast in the database
    public function update(Request $request, Podcast $podcast)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'link' => 'required|url',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($podcast->image && file_exists(public_path("storage/{$podcast->thumbnail}"))) {
                unlink(public_path("storage/{$podcast->thumbnail}"));
            }
            $thumbnailPath = $request->file('thumbnail')->store('uploads', 'public');
            $data['thumbnail'] = $thumbnailPath;
        }
        $podcast->update($data);

        return redirect()->route('podcasts.index')->with('success', 'Podcast updated successfully.');
    }

    // Remove the specified podcast from the database
    public function destroy($id)
    {
        $podcast = Podcast::findOrFail($id);
        $podcast->delete();

        return redirect()->route('podcasts.index')->with('success', 'Podcast deleted successfully.');
    }
}
