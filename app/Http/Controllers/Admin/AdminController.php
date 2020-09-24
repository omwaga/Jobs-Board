<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
        
    //return the admin dashbaoard
    public function dashboard()
    {
        return view('backend.index');
    }
}
