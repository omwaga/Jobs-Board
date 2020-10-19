<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Documents;

class DocumentsController extends Controller
{
    public function store(Request $request)
    {
    	$attributes = $request->validate([
    		'name' => ['required', 'min:3'],
    		'document_file' => ['required'],
    	]);

        if ($request->hasFile('document_file')) {
            $attributes['document_file'] = $request->document_file->getClientOriginalName();
            $request->document_file->storeAs('public/resumes', $attributes['document_file']);
        }

		Documents::create($attributes + ['user_id' => auth()->user()->id]);

		Alert::Success('Success!', 'Document details uploaded successfully')->position('top-right')->toToast();

		return back();
    }
}
