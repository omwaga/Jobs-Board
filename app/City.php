<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class City extends Model
{
    use Sluggable;

    protected $fillable = ['name', 'country_id', 'slug', 'description'];

    public function country()
    {
    	return $this->belongsTo(Country::class);
    }

    public function jobs()
    {
        return $this->hasMany(Vacancy::class, 'id', 'city');
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
