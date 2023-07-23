<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Education;
use App\Models\Province;
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

            PengaturanSeeder::class,
            RoleSeeder::class,
            UsersSeeder::class,
            ProgramSeeder::class,
            SiswaSeeder::class,
            DocumentsSeeder::class,
            EducationSeeder::class,
            ProvincesSeeder::class,
        ]);
    }
}
