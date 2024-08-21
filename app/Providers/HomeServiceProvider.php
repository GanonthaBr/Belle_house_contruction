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
        view()->composer(['partials.blog.blog_details', 'partials.admin.mainheader'], function ($view) {
            $view->with('blogs', \App\Models\Blog::all()->take(5))

                ->with('messages', \App\Models\Contact::latest()->get()->map(
                    function ($message) {
                        $message->created_at_human = $message->created_at->locale('fr')->diffForHumans();
                        return $message;
                    }
                ))
                ->with('newMessages', \App\Models\Contact::where('read', false)->latest()->get()->map(
                    function ($message) {
                        $message->created_at_human = $message->created_at->locale('fr')->diffForHumans();
                        return $message;
                    }
                ));
        });
    }
}
