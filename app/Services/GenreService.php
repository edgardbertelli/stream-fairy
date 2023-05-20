<?php

namespace App\Services;

use App\Contracts\GenreContract;

class GenreService
{
    private $genreContract;

    public function __construct(GenreContract $genreContract)
    {
        $this->genreContract = $genreContract;
    }

    public function index()
    {
        return $this->genreContract->index();
    }
}