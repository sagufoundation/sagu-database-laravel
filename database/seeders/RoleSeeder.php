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
        // $rolesName = [
        //     'administrator',
        //     'users',
        //     'guest',
        //     'student',
        //     'librarian'
        // ];
        // foreach ($rolesName as $role) {
        //         Role::create([
        //             'name' => $role,
        //             'guard_name' => 'web',
        //             'display_name' => Str::ucfirst($role),
        //             'description' => $rolesDesc,
        //         ]);   
        // }

        Role::create([
            'name' => 'administrator',
            'guard_name' => 'web',
            'display_name' => 'Administrator',
            'description' => 'Administrator Lorem Ipsum is simply dummy text of the printing and typesetting industry',
        ]);
        Role::create([
            'name' => 'users',
            'guard_name' => 'web',
            'display_name' => 'Users',
            'description' => 'Users Lorem Ipsum is simply dummy text of the printing and typesetting industry',
        ]);
        Role::create([
            'name' => 'guest',
            'guard_name' => 'web',
            'display_name' => 'Guest',
            'description' => 'Guest Lorem Ipsum is simply dummy text of the printing and typesetting industry',
        ]);
        Role::create([
            'name' => 'student',
            'guard_name' => 'web',
            'display_name' => 'Student',
            'description' => 'Student Lorem Ipsum is simply dummy text of the printing and typesetting industry',
        ]);
        Role::create([
            'name' => 'librarian',
            'guard_name' => 'web',
            'display_name' => 'Librarian',
            'description' => 'Librarian Lorem Ipsum is simply dummy text of the printing and typesetting industry',
        ]);
    }
}
