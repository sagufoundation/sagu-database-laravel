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
            'description' => 'Account with this role can access all the features. Able to view, create, edit, delete all the datas.',
        ]);

        Role::create([
            'name' => 'users',
            'guard_name' => 'web',
            'display_name' => 'Users',
            'description' => 'Able to view some features : View and update profile, view books, manage loan logs.',
        ]);

        Role::create([
            'name' => 'student',
            'guard_name' => 'web',
            'display_name' => 'Student',
            'description' => 'Able to view some features : View and update profile, view books, manage loan logs.',
        ]);

        Role::create([
            'name' => 'guest',
            'guard_name' => 'web',
            'display_name' => 'Guest',
            'description' => 'Able to view some features and do not able to manage or update any information.',
        ]);

        Role::create([
            'name' => 'librarian',
            'guard_name' => 'web',
            'display_name' => 'Librarian',
            'description' => 'Able to view and manage some features: View, create, edit, delete books and also manage the loan logs.',
        ]);
    }
}
