<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContratsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobContracts = [
            ['name' => 'CDI'],
            ['name' => 'CDD'],
            ['name' => 'Freelance'],
            ['name' => 'Part-Time'],
            ['name' => 'Full-Time'],
            ['name' => 'Hybrid'],
           
        ];

        foreach ($jobContracts as $contract) {
            Contract::create($contract);
        }
    }
}
