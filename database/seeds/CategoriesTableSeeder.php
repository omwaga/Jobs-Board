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
        Category::create(['name' => 'IT and Telecoms', 'slug' => 'it-and-telecoms-jobs-in-kenya', 'description' => 'description']);
        Category::create(['name' => 'Training and Consultancy', 'slug' => 'training-and-consultancy-jobs-in-kenya', 'description' => 'description']);
        Category::create(['name' => 'Sales and Marketing', 'slug' => 'sales-and-marketing-jobs-in-kenya', 'description' => 'description']);
    }
}
