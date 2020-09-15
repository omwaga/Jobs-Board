<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostingSubscription extends Model
{
    protected $fillable = ['name', 'charges', 'description'];
}
