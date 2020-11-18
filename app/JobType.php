<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    protected $fillable = ['name', 'description'];


    public function jobs()
    {
    	return $this->hasMany(Vacancy::class, 'id', 'job_type');
    }
}
