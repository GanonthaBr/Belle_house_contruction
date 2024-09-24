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
        view()->composer(['partials.blog.blog_details', 'partials.admin.mainheader', 'partials.admin.project_list', 'partials.admin.realisation_list', 'partials.admin.service_list', 'partials.admin.partner_list', 'partials.admin.messages_list'], function ($view) {
            $view->with('blogs', \App\Models\Blog::all()->take(5))
                ->with('projects', \App\Models\Project::all())
                ->with('realisations', \App\Models\Realisation::all())
                ->with('services', \App\Models\Service::all())
                ->with('partners', \App\Models\Partner::all())

                ->with('messages', \App\Models\Contact::latest()->take(20)->get()->map(
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
