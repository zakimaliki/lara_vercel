<?php
namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // Get all movies
    public function index()
    {
        return Movie::all();
    }

    // Create a new movie
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'publishing_year' => 'required|integer|digits:4',
            'poster' => 'nullable|image'
        ]);

        $movie = new Movie;
        $movie->title = $request->title;
        $movie->publishing_year = $request->publishing_year;

        if ($request->hasFile('poster')) {
            $movie->poster = $request->file('poster')->store('posters', 'public');
        }

        $movie->save();

        return response()->json($movie, 201);
    }

    // Get a single movie
    public function show($id)
    {
        return Movie::findOrFail($id);
    }

    // Update a movie
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'string|max:255',
            'publishing_year' => 'integer|digits:4',
            'poster' => 'nullable|image'
        ]);

        $movie = Movie::findOrFail($id);
        $movie->title = $request->title ?? $movie->title;
        $movie->publishing_year = $request->publishing_year ?? $movie->publishing_year;

        if ($request->hasFile('poster')) {
            $movie->poster = $request->file('poster')->store('posters', 'public');
        }

        $movie->save();

        return response()->json($movie, 200);
    }

    // Delete a movie
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return response()->json(null, 204);
    }
}
