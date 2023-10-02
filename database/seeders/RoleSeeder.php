<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolesName = [
            'administrator',
            'guest',
            'editor',
            'author',
            'supervisor',
            'users'
        ];
        foreach ($rolesName as $role) {
            Role::create([
                'name' => $role,
                'guard_name' => 'web',
                'display_name' => Str::ucfirst($role)
            ]);
        }
    }
}
