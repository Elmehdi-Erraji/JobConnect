<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        
        $skillsData = [
            ['name' => 'PHP'],
            ['name' => 'JavaScript'],
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'Python'],
            ['name' => 'Java'],
            ['name' => 'Ruby'],
            ['name' => 'C#'],
            ['name' => 'C++'],
            ['name' => 'Swift'],
            ['name' => 'React'],
            ['name' => 'Angular'],
            ['name' => 'Vue.js'],
            ['name' => 'Node.js'],
            ['name' => 'Express.js'],
            ['name' => 'Laravel'],
            ['name' => 'Django'],
            ['name' => 'Ruby on Rails'],
            ['name' => 'Spring'],
            ['name' => 'Bootstrap'],
            ['name' => 'Sass'],
            ['name' => 'Git'],
            ['name' => 'MySQL'],
            ['name' => 'PostgreSQL'],
            ['name' => 'MongoDB'],
            ['name' => 'Firebase'],
            ['name' => 'REST API'],
            ['name' => 'GraphQL'],
            ['name' => 'Docker'],
            ['name' => 'Kubernetes'],
            ['name' => 'Jenkins'],
           
        ];

        
        Skill::insert($skillsData);
    }
}
