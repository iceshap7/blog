<?php

namespace App\Providers;

use App\Http\Repositories\Contracts\PostRepositoryContract;
use App\Http\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(PostRepositoryContract::class, PostRepository::class);
    }
}
