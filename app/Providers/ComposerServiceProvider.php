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
        View::composer('front.layout.partials.menu', 'App\Composers\MenuComposer');
        View::composer('front.layout.partials.footer', 'App\Composers\MenuComposer');
    }
}
