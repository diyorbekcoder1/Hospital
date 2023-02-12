<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Slider;
use App\Repositories\Menu\MenuRepository;
use App\Repositories\Slider\SliderRepository;
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

        $app->bind('App\Repositories\Slider\SliderInterface',function ($app){

            $sliders = new SliderRepository(
                new Slider()
            );

            return $sliders;
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
