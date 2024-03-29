<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Controllers\Admin\ContractController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            SkillsTableSeeder::class,
            EducationLevelsTableSeeder::class,
            ProfessionsTableSeeder::class,
            CategoriesTableSeeder::class,
            ContratsTableSeeder::class,
        ]);
    }
}
