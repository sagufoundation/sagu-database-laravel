<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create(
            [
                'id' => 1,
                'name' => 'Papua',
                'description' => 'Province of Papua',
            ]
        );

        Province::create(
            [
                'id' => 2,
                'name' => 'Papua Pegunungan',
                'description' => 'Province of Papua Pegunungan',
            ]
        );
    }
}
