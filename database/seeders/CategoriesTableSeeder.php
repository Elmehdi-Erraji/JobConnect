<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed job categories
        $jobCategories = [
            ['name' => 'Software Development'],
            ['name' => 'Web Development'],
            ['name' => 'Data Science'],
            ['name' => 'Graphic Design'],
            ['name' => 'Marketing'],
            ['name' => 'Sales'],
            ['name' => 'Customer Service'],
            ['name' => 'Finance'],
            ['name' => 'Human Resources'],
            ['name' => 'Project Management'],
            
        ];

        foreach ($jobCategories as $category) {
            Category::create($category);
        }
    }
}
