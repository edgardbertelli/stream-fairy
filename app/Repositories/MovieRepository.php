<?php

namespace App\Repositories;

use App\Contracts\MovieContract;
use App\Models\Movie;

class MovieRepository implements MovieContract
{
    private $movies;

    public function __construct(Movie $movies)
    {
        $this->movies = $movies;
    }

    public function index()
    {
        try {
            return $this->movies::all();
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    public function show(string $id)
    {
        try {
            $movie = $this->movies::findOrFail($id);

            return $movie;
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    public function update(array $validated, string $id)
    {
        try {
            $movie = $this->movies::findOrFail($id);

            $movie->title       = $validated['title'];
            $movie->description = $validated['description'];
            $movie->director    = $validated['director'];
            $movie->year        = $validated['year'];
            $movie->rate        = $validated['rate'];
            $movie->genre_id    = $validated['genre_id'];

            $movie->save();

            return $movie;
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    public function store(array $validated)
    {
        try {
            $this->movies->create([
                'title'       => $validated['title'],
                'description' => $validated['description'],
                'director'    => $validated['director'],
                'rate'        => $validated['rate'],
                'year'        => $validated['year'],
                'genre_id'    => $validated['genre_id']
            ]);
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    public function destroy(string $id)
    {
        try {
            $movie = $this->movies::findOrFail($id);

            $movie->delete();
        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}
