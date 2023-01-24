<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table='categories';
    public function posts()
    {
        return $this->belongsToMany('App\Models\Post')->withTimestamps();
    }
}
