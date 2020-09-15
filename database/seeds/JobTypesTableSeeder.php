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
        JobType::create(['name' => 'Full Time']);
        JobType::create(['name' => 'Part Time']);
        JobType::create(['name' => 'Contract']);
        JobType::create(['name' => 'Tender']);
    }
}
