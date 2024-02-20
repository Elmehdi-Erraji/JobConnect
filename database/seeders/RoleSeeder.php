<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->truncate();
        DB::table('permissions')->truncate();

        $permissions = [
            'user_access',
            'user_edit',
            'user_delete',
            'user_create',
            // Add more permissions as needed
        ];

        foreach ($permissions as $permissionName) {
            Permission::create(['name' => $permissionName]);
        }

        $roles = [
            'admin' => ['user_access', 'user_edit', 'user_delete', 'user_create'],
            'responsabel' => ['user_access', 'user_create'],
            'recruter' => ['user_access'],
            'condidat' => ['user_access'],
        ];

        foreach ($roles as $roleName => $permissionNames) {
            // Create role
            $role = Role::create(['name' => $roleName]);

            // Attach random permissions to the role
            $permissions = Permission::whereIn('name', $permissionNames)->pluck('id');
            $role->permissions()->attach($permissions);
        }
    }
}
