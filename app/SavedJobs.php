<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavedJobs extends Model
{
    protected $guarded = [];

    public function job()
    {
    	return $this->belongsTo(Vacancy::class, 'vacancy_id', 'id');
    }
}
