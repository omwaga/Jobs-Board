<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function postcountry()
    {
    	return $this->belongsTo(Country::class, 'country', 'id');
    }

    public function postsubscription()
    {
    	return $this->belongsTo(PostingSubscription::class, 'subscription', 'id');
    }

    public function postcity()
    {
    	return $this->belongsTo(City::class, 'city', 'id');
    }

    public function postcategory()
    {
    	return $this->belongsTo(Category::class, 'category', 'id');
    }

    public function postjobtype()
    {
    	return $this->belongsTo(JobType::class, 'job_type', 'id');
    }
}
