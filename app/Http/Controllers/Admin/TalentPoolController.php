<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\TalentPool;

class TalentPoolController extends Controller
{
	public function __construct()
	{
		return $this->middleware('auth');
	}

	public function index()
	{   	
		if(auth()->user()->hasRole('admin'))
		{
			$talents = TalentPool::all();
		}
		else{
			$talents = TalentPool::where('user_id', auth()->user()->id)->get();
		}

		return view('backend.talent-pools', compact('talents'));
	}

	public function create()
	{
		return view('backend.create-pool');
	}

	public function store(Request $request)
	{
		$attributes = $request->validate([
			'name' => 'required|min:3',
		]);  

		TalentPool::create($attributes + ['user_id' => auth()->user()->id]);

		Alert::Success('Success!', 'Talent pool added successfully')->position('top-right')->toToast();

		return redirect(route('admin.talents.index'));
	}

	public function edit(TalentPool $talent)
	{
		return view('backend.edit-talent-pool', compact('talent'));
	}

	public function update(TalentPool $talent, Request $request)
	{
		$talent->update(['name' => $request->name]);

		Alert::Success('Success!', 'Talent pool upated successfully')->position('top-right')->toToast();

		return redirect(route('admin.talents.index'));
	}
}
