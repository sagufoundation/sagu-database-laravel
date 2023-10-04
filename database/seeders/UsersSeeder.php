<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = collect([
            [
                'first_name' => 'Janzen',
                'middle_name' => '',
                'last_name' => 'Faidiban',
                'slug' => 'janzen-faidiban',
                'job_title' => 'Information Technology Coordinator',
                'picture' => 'images/users/Janzen-3-200x200.jpg',
                'email' => 'janzen.faidiban@sagufoundation.org',
                'password' => bcrypt('janzen.faidiban@sagufoundation.org'),
                'status' => 'Publish',
                'role' => 'administrator',


            ],
            [
                'first_name' => 'Febe',
                'middle_name' => '',
                'last_name' => 'Worabay',
                'slug' => 'febe-worabay',
                'job_title' => 'Administration Officer',
                'picture' => 'images/users/Febe-200x200.jpg',
                'email' => 'febe-woaraby@sagufoundation.org',
                'password' => bcrypt('febe-woaraby@sagufoundation.org'),
                'status' => 'Publish',
                'role' => 'administrator',

            ],

            [
                'first_name' => 'Tisha',
                'middle_name' => '',
                'last_name' => 'Rumbewas',
                'slug' => 'tisha-rumbewas',
                'job_title' => 'Director',
                'picture' => 'images/users/Tisha-200x200.jpg',
                'email' => 'tisha.rumbewas@sagufoundation.org',
                'password' => bcrypt('tisha.rumbewas@sagufoundation.org'),
                'status' => 'Publish',
                'role' => 'administrator',

            ],
            [
                'first_name' => 'Elisabeth',
                'middle_name' => '',
                'last_name' => 'Jakarimilena',
                'slug' => 'elisabeth-jakarimilena',
                'job_title' => 'Finance Officer',
                'picture' => 'images/users/Ellysabeth-200x200.jpg',
                'email' => 'elisabeth.jakarimilena@sagufoundation.org',
                'password' => bcrypt('elisabeth.jakarimilena@sagufoundation.org'),
                'status' => 'Publish',
                'role' => 'administrator',


            ],
            [
                'first_name' => 'Guest',
                'middle_name' => '',
                'last_name' => 'SAGU',
                'slug' => 'guest-sagu',
                'job_title' => 'Guest SAGU Foundation',
                'picture' => 'images/users/profile-sagu-foundation.jpg',
                'email' => 'guest@sagufoundation.org',
                'password' => bcrypt('guest@sagufoundation.org'),
                'status' => 'Publish',
                'role' => 'guest',

            ],
            [
                'first_name' => 'BPSDM',
                'middle_name' => '',
                'last_name' => '',
                'slug' => 'bpsdm',
                'job_title' => 'Pemerintah Provinsi Papua',
                'picture' => 'images/users/profile-provinsi-papua.jpg',
                'email' => 'admin.bpsdm@papua.go.id',
                'password' => bcrypt('admin.bpsdm@papua.go.id'),
                'status' => 'Publish',
                'role' => 'guest',

            ],
            [
                'first_name' => 'Anastasia',
                'middle_name' => 'Febriani',
                'last_name' => 'Yandong',
                'slug' => 'anastasia-febriani-yandong',
                'picture' => 'images/users/anastasia-yandong.jpg',
                'email' => 'anastasia@gmail.com',
                'password' => bcrypt('anastasia@gmail.com'),
                'status' => 'Publish',
                'role' => 'student',
                'phone' => '082112341234'
            ]
        ]);

        $users->map(function ($user) {
            $user = collect($user);
            $newUser = User::create($user->except('role')->toArray());
            $newUser->assignRole($user['role']);
        });
    }
}
