<?php

use Illuminate\Database\Seeder;
use App\JobType;

class JobTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobType::create(['name' => 'Full Time', 'description' => 'description']);
        JobType::create(['name' => 'Part Time', 'description' => 'description']);
        JobType::create(['name' => 'Contract', 'description' => 'description']);
        JobType::create(['name' => 'Tender', 'description' => 'description']);
    }
}
