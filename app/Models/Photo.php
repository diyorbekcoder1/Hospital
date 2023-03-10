<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    public $table = 'photos';
    public $timestamps = false;

    public function slider(){
        return $this->morphTo('App\Models\Slider','relationship');
    }

    public function photo_gallery(){
        return $this->morphTo('App\Models\PhotoGallery','relationship');
    }
}
