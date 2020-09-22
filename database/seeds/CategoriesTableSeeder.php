<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'IT and Telecoms', 'description' => 'description']);
        Category::create(['name' => 'Training and Consultancy', 'description' => 'description']);
        Category::create(['name' => 'Sales and Marketing', 'description' => 'description']);
    }
}
