<?php

namespace App\Composers;

use App\Repositories\Menu\MenuInterface;

class MenuComposer
{
    protected $menu;

    public function __construct(MenuInterface $menu)
    {
        $this->menu = $menu;
    }

    /**
     * @param $view
     */
    public function compose($view)
    {
        $items = $this->menu->all();
        $menus = $this->menu->getFrontMenuHTML($items);
        $view->with('menus', $menus);
    }
}
