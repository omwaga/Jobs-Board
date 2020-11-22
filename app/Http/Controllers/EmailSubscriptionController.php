<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\EmailSubscription;

class EmailSubscriptionController extends Controller
{
	public function store(Request $request)
	{
		$attributes = $request->validate([
			'email' => 'required|min:3|email|unique:email_subscriptions'
		]);

		EmailSubscription::create($attributes);

		Alert::Success('Success!', 'You have subscribed to our mailing list successfully')->position('top-right')->toToast();
		return back();
	}
}
