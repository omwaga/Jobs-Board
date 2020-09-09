<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DataController extends Controller
{
	
	public function getStates($id) 
	{        
		$states = DB::table("cities")->where("country_id",$id)->pluck("name","id");
		return json_encode($states);
	}
}
