<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HomeServiceProvider extends ServiceProvider
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
        view()->composer(['partials.blog.blog_details'], function ($view) {
            $view->with('blogs', \App\Models\Blog::all()->take(5));
        });
    }
}
