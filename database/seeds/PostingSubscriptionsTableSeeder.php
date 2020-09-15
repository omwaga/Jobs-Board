<?php

use Illuminate\Database\Seeder;
use App\PostingSubscription;

class PostingSubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostingSubscription::create([
        	'name' => 'Free Posting',
        	'charges' => 'Free',
        	'description' => 'Free For 2 weeks'
        ]);
        PostingSubscription::create([        	
        	'name' => 'Basic Posting',
        	'charges' => '500',
        	'description' => '$500 For 30 days'
        ]);
        PostingSubscription::create([
        	'name' => 'Premium Posting',
        	'charges' => '300',
        	'description' => ' $300 / Monthly Recurring'        	
        ]);
    }
}
