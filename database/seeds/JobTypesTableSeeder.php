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
        JobType::create(['name' => 'Full Time', 'slug' => 'full-time-jobs', 'description' => 'description']);
        JobType::create(['name' => 'Part Time', 'slug' => 'part-time-jobs', 'description' => 'description']);
        JobType::create(['name' => 'Contract', 'slug' => 'contract-jobs', 'description' => 'description']);
        JobType::create(['name' => 'Tender', 'slug' => 'tender-jobs', 'description' => 'description']);
    }
}
