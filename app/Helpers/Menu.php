<?php

namespace App\Helpers;

class Menu
{

    public $menu=[];


    public static function render($params)
    {
        $menu='<ul class="nav-menu custom-scrollbar">';
        $menu.=' <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>';


        foreach ($params['menus'] as $key=>$menuitem){

//            $menu.='<li class="sidebar-main-title">';
//            $menu.='<div><h6>'.$menuitem.'</h6></div>';
//            $menu.='</li>';

            echo '<pre>';
            print_r($menuitem);
            echo '</pre>';
//            foreach ($menuitem as $i=>$menu_item){


//                foreach ($menu_item as $sub_menu){

//                }
//            }
        }
        $menu.='</ul>';
        return $menu;
    }

    public static function create($menu,\Closure $closure){


    }
}
