<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Interviews extends Model
{
    use Sluggable;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(InterviewCategories::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(InterviewSubcategories::class);
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
                'source' => 'question'
            ]
        ];
    }
}
