<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'slug'];

    public function jobs()
    {
    	return $this->hasMany(Vacancy::class, 'id', 'category');
    }
}
