<?php

namespace App\Providers;


use App\Models\Menu;
use App\Models\Page;
use App\Models\Slider;
use App\Repositories\Menu\MenuRepository;
use App\Repositories\Page\PageRepository;
use App\Repositories\Slider\SliderRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
      $app=$this->app;

      $app->bind('App\Repositories\Menu\MenuInterface',function ($app){

          $menu = new MenuRepository(
              new Menu()
          );

          return $menu;
      });

        $app->bind('App\Repositories\Page\PageInterface', function ($app) {

            $page = new PageRepository(
                new Page()
            );
            return $page;
        });

        $app->bind('App\Repositories\Slider\SliderInterface',function ($app){

            $sliders = new SliderRepository(
                new Slider()
            );

            return $sliders;
        });
    }
    public function boot()
    {
        //
    }
}
