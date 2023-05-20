<?php

namespace App\Http\Controllers;

use App\Services\GenreService;
use App\Services\MovieService;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    private $movieService;
    private $genreService;

    public function __construct(MovieService $movieService, GenreService $genreService)
    {
        $this->movieService = $movieService;
        $this->genreService = $genreService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = $this->movieService->index();

        return view('settings.movies.index', [
            'movies' => $movies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = $this->genreService->index();

        return view('settings.movies.create', [
            'genres' => $genres
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->movieService->store($request);

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = $this->movieService->show($id);

        return view('settings.movies.show', [
            'movie' => $movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = $this->movieService->show($id);
        $genres = $this->genreService->index();

        return view('settings.movies.edit', [
            'movie' => $movie,
            'genres' => $genres
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = $this->movieService->update($request, $id);

        return redirect()->route('movies.show', $movie->id);
    }

    public function delete(string $id)
    {
        $movie = $this->movieService->show($id);

        return view('settings.movies.delete', [
            'movie' => $movie
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->movieService->destroy($id);

        return redirect()->route('movies.index');
    }
}
