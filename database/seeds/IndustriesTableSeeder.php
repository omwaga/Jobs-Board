<?php

use Illuminate\Database\Seeder;
use App\Industry;

class IndustriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        Industry::create(['name' => 'Computing and IT', 'description' => 'description']);
        Industry::create(['name' => 'Data Science and Machine Learning', 'description' => 'description']);
        Industry::create(['name' => 'Sales and Marketing', 'description' => 'description']);   
    }
}
