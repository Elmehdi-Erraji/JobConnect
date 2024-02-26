<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->truncate();

        $permissions = [
            [
                'name' => 'user_create',
            ],
            [
                'name' => 'user_delete',
            ],
            [
                'name' => 'user_update',
            ],
            [
                'name' => 'user_access',
            ],

            //category
            [
                'name' => 'category_access',
            ],
            [
                'name' => 'category_create',
            ],
            [
                'name' => 'user_delete',
            ],

            //education level
            [
                'name' => 'educationlevel_access',
            ],
            [
                'name' => 'educationlevel_create',
            ],
            [
                'name' => 'educationlevel_delete',
            ],

            //Contrat
            [
                'name' => 'contrat_access',
            ],
            [
                'name' => 'contrat_create',
            ],
            [
                'name' => 'contrat_delete',
            ],

            //skills
            [
                'name' => 'skill_access',
            ],
            [
                'name' => 'skill_create',
            ],
            [
                'name' => 'skill_delete',
            ],

            //profession
            [
                'name' => 'profession_access',
            ],
            [
                'name' => 'profession_create',
            ],
            [
                'name' => 'profession_delete',
            ],

            //Entrprise
            [
                'name' => 'entreprise_delete',
            ],
            [
                'name' => 'entreprise_access',
            ],
            [
                'name' => 'entreprise_create',
            ],
            [
                'name' => 'entreprise_update',
            ],


            //profile 
            [
                'name' => 'profile_delete',
            ],
            [
                'name' => 'profile_access',
            ],
            [
                'name' => 'profile_create',
            ],
            [
                'name' => 'profile_update',
            ],


            //offers
            [
                'name' => 'offer_delete',
            ],
            [
                'name' => 'offer_access',
            ],
            [
                'name' => 'offer_create',
            ],
            [
                'name' => 'offer_update',
            ],

            //formation
            [
                'name' => 'formation_delete',
            ],
            [
                'name' => 'formation_access',
            ],
            [
                'name' => 'formation_create',
            ],
            [
                'name' => 'formation_update',
            ],


            //experience
            [
                'name' => 'experience_delete',
            ],
            [
                'name' => 'experience_access',
            ],
            [
                'name' => 'experience_create',
            ],
            [
                'name' => 'experience_update',
            ],

        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

    }
}
