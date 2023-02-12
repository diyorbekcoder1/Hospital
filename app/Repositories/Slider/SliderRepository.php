<?php

namespace App\Repositories\Slider;
use App\Repositories\AbstractValidator as Validator;
use App\Models\Slider;

class SliderRepository extends Validator implements SliderInterface
{

    protected  $slider;

    public function __construct(Slider $slider){
        $this->slider=$slider;
    }


    public function all()
    {
        return $this->slider->where('lang',getLang())->orderBy('created_at','DESC')->get();
    }
}
