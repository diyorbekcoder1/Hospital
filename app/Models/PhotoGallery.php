<?php

namespace App\Models;

use App\Interfaces\ModelInterface;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends BaseModel implements ModelInterface
{

    public $table = 'photo_galleries';
    public $fillable = ['title', 'content', 'is_published'];
    protected $appends = ['url'];

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to' => 'slug',
    );

    public function photos(){
        return $this->morphTo('App\Models\Photo','relationship','type');
    }
    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return 'photo-gallery/'.$this->attributes['slug'];
    }
}
