<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobseekerDetail extends Model
{
    protected $guarded = [];

    public function city()
    {
    	return $this->belongsTo(City::class, 'current_location', 'id');
    }

    public function home()
    {
    	return $this->belongsTo(City::class, 'home_city', 'id');
    }
}
