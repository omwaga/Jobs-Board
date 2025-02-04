<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class BlogPost extends Model
{    
    use Sluggable;
    
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(BlogSubcategories::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
