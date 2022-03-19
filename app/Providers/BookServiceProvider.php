<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\BookRepository;
use App\Repositories\IBaseRepository;
use App\Repositories\IBookRepository;
use Illuminate\Support\ServiceProvider;

class BookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IBookRepository::class, BookRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
