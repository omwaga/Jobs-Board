<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class InterviewCategories extends Model
{
    use Sluggable;

    protected $guarded = [];

    public function interviews()
    {
        return $this->hasMany(Interviews::class);
    }

    public function subcategory()
    {
        return $this->hasMany(InterviewSubcategories::class, 'id', 'category_id');
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
