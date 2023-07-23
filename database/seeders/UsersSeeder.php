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
                'name' => 'Janzen Faidiban',
                'slug' => 'janzen-faidiban',
                'job_title' => 'Information Technology Coordinator',
                'picture' => 'Janzen-3-200x200.jpg',
                'email' => 'janzen.faidiban@sagufoundation.org',
                'password' => bcrypt('janzen.faidiban@sagufoundation.org'),
                'status' => 'Publish',
                'role' => 'administrator',

            ],
            [
                'name' => 'Febe Worabay',
                'slug' => 'febe-worabay',
                'job_title' => 'Administration Officer',
                'picture' => 'Febe-200x200.jpg',
                'email' => 'febe-woaraby@sagufoundation.org',
                'password' => bcrypt('febe-woaraby@sagufoundation.org'),
                'status' => 'Publish',
                'role' => 'administrator',
            ],
            [
                'name' => 'Tisha Rumbewas',
                'slug' => 'tisha-rumbewas',
                'job_title' => 'Director',
                'picture' => 'Tisha-200x200.jpg',
                'email' => 'tisha.rumbewas@sagufoundation.org',
                'password' => bcrypt('tisha.rumbewas@sagufoundation.org'),
                'status' => 'Publish',
                'role' => 'administrator',
            ],
            [
                'name' => 'Elisabeth Jakarimilena',
                'slug' => 'elisabeth-jakarimilena',
                'job_title' => 'Finance Officer',
                'picture' => 'Ellysabeth-200x200.jpg',
                'email' => 'elisabeth.jakarimilena@sagufoundation.org',
                'password' => bcrypt('elisabeth.jakarimilena@sagufoundation.org'),
                'status' => 'Publish',
                'role' => 'administrator',

            ],
            [
                'name' => 'Guest SAGU',
                'slug' => 'guest-sagu',
                'job_title' => 'Guest SAGU Foundation',
                'picture' => 'profile-sagu-foundation.jpg',
                'email' => 'guest@sagufoundation.org',
                'password' => bcrypt('guest@sagufoundation.org'),
                'status' => 'Publish',
                'role' => 'guest',
            ],
            [
                'name' => 'BPSDM',
                'slug' => 'bpsdm',
                'job_title' => 'Pemerintah Provinsi Papua',
                'picture' => 'profile-provinsi-papua.jpg',
                'email' => 'admin.bpsdm@papua.go.id',
                'password' => bcrypt('admin.bpsdm@papua.go.id'),
                'status' => 'Publish',
                'role' => 'guest',
            ]
        ]);

        $users->map(function ($user) {
            $user = collect($user);
            $newUser = User::create($user->except('role')->toArray());
            $newUser->assignRole($user['role']);
        });
    }
}
