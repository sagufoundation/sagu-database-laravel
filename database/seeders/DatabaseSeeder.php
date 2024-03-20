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
            GroupSeeder::class,
            StudentsSeeder::class,
            DocumentsSeeder::class,
            EducationSeeder::class,

            // LIBRARY
            Library\AuthorSeeder::class,
            Library\CateegoriesSeeder::class,
            Library\BooksSeeder::class,
            Library\LoanLogsSeeder::class,

            // PapuaGeoSeeder::class,
        ]);
    }
}
