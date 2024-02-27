<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $professionNames = [
            'Software Developer',
            'Data Scientist',
            'Network Engineer',
            'Graphic Designer',
            'UX/UI Designer',
            'Web Developer',
            'Database Administrator',
            'System Administrator',
            'DevOps Engineer',
            'Mobile App Developer',
            'Game Developer',
            'Project Manager',
            'Business Analyst',
            'Product Manager',
            'Quality Assurance Analyst',
            'Technical Writer',
            'Content Strategist',
            'Marketing Specialist',
            'Digital Marketer',
            'Financial Analyst',
            'Human Resources Manager',
            'Customer Support Specialist',
            'Sales Representative',
            'Operations Manager',
            'Legal Counsel',
            'Event Planner',
            'Photographer',
            'Chef',
            'Fitness Trainer',
            'Interior Designer',
            'Architect',
            'Teacher',
            'Nurse',
            'Doctor',
            'Psychologist',
            'Police Officer',
            'Firefighter',
            'Pilot',
            'Astronaut',
        ];

        foreach ($professionNames as $name) {
            Profession::create(['name' => $name]);
        }
    }
}
