<?php

namespace App\Providers;

use App\Contracts\GenreContract;
use App\Contracts\MovieContract;
use App\Contracts\UserContract;
use App\Repositories\GenreRepositories;
use App\Repositories\GenreRepository;
use App\Repositories\MovieRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(UserContract::class, UserRepository::class);
        $this->app->bind(MovieContract::class, MovieRepository::class);
        $this->app->bind(GenreContract::class, GenreRepository::class);
    }
}
