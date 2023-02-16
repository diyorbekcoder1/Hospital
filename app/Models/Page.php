<?php

namespace App\Models;



use App\Interfaces\ModelInterface as ModelInterface;
use App\Models\BaseModel;

/**
 * Class Page.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class Page extends BaseModel implements ModelInterface {


    public $table = 'pages';
    protected $fillable = ['title', 'content', 'is_published'];
    protected $appends = ['url'];

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to' => 'slug',
    );

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return 'page/'.$this->attributes['slug'];
    }
}
