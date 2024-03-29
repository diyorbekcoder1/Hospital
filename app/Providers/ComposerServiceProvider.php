<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front.homepage.layouts.partials.navbar', 'App\Composers\MenuComposer');
        View::composer('front.homepage.layouts.partials.footer', 'App\Composers\MenuComposer');
    }
}
