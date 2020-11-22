<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class InterviewSubcategories extends Model
{
    use Sluggable;

    protected $guarded = [];
    
    public function category()
    {
        return $this->belongsTo(InterviewCategories::class);
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
