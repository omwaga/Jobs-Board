<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class BlogSubcategories extends Model
{
    use Sluggable;
    
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id', 'id');
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
                'source' => 'name'
            ]
        ];
    }
}
