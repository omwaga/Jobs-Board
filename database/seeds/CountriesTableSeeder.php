<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        Country::create(['name' => 'Kenya', 'code' => '+254']);
        Country::create(['name' => 'Uganda', 'code' => '+256']);
        Country::create(['name' => 'Nigeria', 'code' => '+231']);
    }
}
