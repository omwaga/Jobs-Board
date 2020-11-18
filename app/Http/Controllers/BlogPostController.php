<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    //
}
