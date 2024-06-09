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
        view()->composer(['partials.projects.index'], function ($view) {
            $view->with('projects', \App\Models\Project::all());
        });
    }
}
