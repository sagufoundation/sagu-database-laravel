<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SettingsSeeder::class,
            RoleSeeder::class,
            UsersSeeder::class,
            ProvincesSeeder::class,
            ProgramSeeder::class,
            StudentsSeeder::class,
            DocumentsSeeder::class,
            EducationSeeder::class,
        ]);
    }
}
