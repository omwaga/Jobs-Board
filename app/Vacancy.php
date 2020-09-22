<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $guarded = [];

    public function postcountry()
    {
    	return $this->belongsTo(Country::class, 'country', 'id');
    }

    public function subscription()
    {
    	return $this->belongsTo(PostingSubscription::class, 'subscription', 'id');
    }
}
