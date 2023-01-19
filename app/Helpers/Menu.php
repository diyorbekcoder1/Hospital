<?php

namespace App\Helpers;

use Spatie\Menu\Link;

class Menu
{

    protected  $menus=[];


    public function __consturct(){
        $this->menus['menus']['item']='General';
        //,'menu_item'=>['title'=>'Dashboard']]];
    }

    public static function render()
    {
//        $menu='<ul class="nav-menu custom-scrollbar">';
//        $menu.=' <li class="back-btn">
//                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
//                </li>';
//
//
//
//        foreach ($this->menus as $key=> $menuitem){
//            echo '<pre>';
//            print_r($menuitem);
//            echo '</pre>';
//            $menu.='<li class="sidebar-main-title">';
//            $menu.='<div><h6>'.$menuitem['item'].'</h6></div>';
//            $menu.='</li>';
//
//            foreach ($menuitem as $i=>$item) {
//                echo '<pre>';
//                print_r($item);
//                echo '</pre>';
////                $menu.='<li class="dropdown"><a class="nav-link menu-title" href="'.route('home').'"><i data-feather="home"></i><span>'.$item['title'].'</span></a>';
////
////                $menu.='</li>';
//            }
//        }
//        $menu.='</ul>';
//        return $menu;
        return Menu::new()
            ->addClass('nav navbar-nav')
            ->link('/one', 'One')
            ->link('/two', 'Two')
            ->submenu(
                Link::to('#', 'Dropdown <span class="caret"></span>')
                    ->addClass('dropdown-toggle')
                    ->setAttributes(['data-toggle' => 'dropdown', 'role' => 'button']),
                Menu::new()
                    ->addClass('dropdown-menu')
                    ->link('#', 'Action')
                    ->link('#', 'Another action')
                    ->html('', ['role' => 'separator', 'class' => 'divider'])
            )
            ->wrap('div.collapse.navbar-collapse')
            ->setActive('/one');
    }

    public static function create($menu,\Closure $closure){


    }
}
