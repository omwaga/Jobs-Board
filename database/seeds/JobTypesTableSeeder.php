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
        JobType::create(['name' => 'Full Time', 'slug' => 'full-time-jobs-in-kenya', 'description' => 'description']);
        JobType::create(['name' => 'Part Time', 'slug' => 'part-time-jobs-in-kenya', 'description' => 'description']);
        JobType::create(['name' => 'Internship', 'slug' => 'internship-jobs-in-kenya', 'description' => 'description']);
        JobType::create(['name' => 'Freelance', 'slug' => 'freelance-jobs-in-kenya', 'description' => 'description']);
        JobType::create(['name' => 'Temporary', 'slug' => 'temporary-jobs-in-kenya', 'description' => 'description']);
    }
}
