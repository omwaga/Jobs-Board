<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $guarded = [];

    public function vacancy()
    {
    	return $this->belongsTo(Vacancy::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function employer()
    {
    	return $this->belongsTo(User::class, 'employer_id', 'id');
    }
}
