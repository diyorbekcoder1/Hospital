<?php

namespace App\Providers;

use App\Models\Menu;
use App\Repositories\Menu\MenuRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $app=$this->app;

      $app->bind('App\Repositories\Menu\MenuInterface',function ($app){

          $menu = new MenuRepository(
              new Menu()
          );

          return $menu;
      });
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
