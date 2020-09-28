<?php

use Illuminate\Database\Seeder;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(['name' => 'Nairobi', 'slug' => 'nairobi-jobs', 'country_id' => '1']);
        City::create(['name' => 'Kampala',  'slug' => 'kampala-jobs', 'country_id' => '2']);
        City::create(['name' => 'Lagos', 'slug' => 'lagos-jobs', 'country_id' => '3']);
    }
}
