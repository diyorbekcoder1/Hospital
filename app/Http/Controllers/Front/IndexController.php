<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
//use App\Repositories\Project\ProjectInterface;
use App\Repositories\Slider\SliderInterface;
//use App\Repositories\Tag\TagInterface;

class IndexController extends Controller
{
    protected $slider;
    protected $project;
    protected $tag;

    public function __construct(SliderInterface $slider)
    {
        $this->slider = $slider;
//        $this->project = $project;
//        $this->tag = $tag;
    }

    public function index()
    {
        $sliders=$this->slider->all();
        return view('front.homepage.app',compact('sliders'));
    }
}
