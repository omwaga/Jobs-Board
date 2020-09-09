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
        City::create(['name' => 'Nairobi', 'country_id' => '1']);
        City::create(['name' => 'Kampala', 'country_id' => '2']);
        City::create(['name' => 'Lagos', 'country_id' => '3']);
    }
}
