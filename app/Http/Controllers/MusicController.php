<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index(){

        $music = Music::all();

        return view('index', compact('music'));
    }

    public function create(){
        return view('actions.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        'artist' => 'required|string|max:255',
        'genre' => 'required|string|max:255',
        'duration' => 'required|integer|min:1',
        'release_date' => 'required|date',
        ]);

        // dd('abot');
        Music::create($validated);

        return redirect()->route('index')->with('success', 'Music Added successfully');
    }

    public function edit(Music $music){
        return view('actions.edit', compact('music'));
    }

    public function update(Request $request, Music $music){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'release_date' => 'required|date',
        ]);

        $music->update($validated);

        return redirect()->route('index')->with('success', 'Updated Successfully');
    }

    public function destroy(Music $music){
        $music->delete();
        return redirect()->route('index')->with('success', 'Deleted Successfully');
    }
}