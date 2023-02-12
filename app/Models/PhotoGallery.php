<?php

namespace App\Models;

use App\interfaces\ModelInterface;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends BaseModel implements ModelInterface,SluggableInterface
{
    use HasFactory,SluggableTrait;
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
