<?php

namespace Database\Seeders;

use App\Models\EducationLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $levels = [
            'bac', 'bac+1', 'bac+2', 'bac+3', 'bac+4', 'bac+5', 'bac+6 ou plus'
        ];

        foreach ($levels as $level) {
            EducationLevel::create(['name' => $level]);
        }
    }
}
