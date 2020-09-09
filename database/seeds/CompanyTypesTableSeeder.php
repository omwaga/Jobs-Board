<?php

use Illuminate\Database\Seeder;
use App\CompanyType;

class CompanyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyType::create(['name' => 'Company']);
        CompanyType::create(['name' => 'Consultant']);
        CompanyType::create(['name' => 'Recruitment Firm']);
    }
}
