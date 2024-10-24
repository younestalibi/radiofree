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
        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'required|image',
            'link' => 'required|url',
        ]);

        Podcast::create([
            'title' => $request->title,
            'thumbnail' => $request->thumbnail,
            'link' => $request->link,
        ]);

        return redirect()->route('podcasts.index')->with('success', 'Podcast created successfully.');
    }

    // Show the form for editing the specified podcast
    public function edit($id)
    {
        $podcast = Podcast::findOrFail($id);
        return view('podcasts.edit', compact('podcast'));
    }

    // Update the specified podcast in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'required|string',
            'link' => 'required|url',
        ]);

        $podcast = Podcast::findOrFail($id);
        $podcast->update([
            'title' => $request->title,
            'thumbnail' => $request->thumbnail,
            'link' => $request->link,
        ]);

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
