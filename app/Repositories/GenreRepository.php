<?php

namespace App\Repositories;

use App\Contracts\GenreContract;
use App\Models\Genre;

class GenreRepository implements GenreContract
{
    private $genres;

    public function __construct(Genre $genres)
    {
        $this->genres = $genres;
    }

    public function index()
    {
        return $this->genres::all();
    }
}