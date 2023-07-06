<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(
            [
                'province_id' => 1,
                'name' => 'Kota Jayapura',
                'description' => 'Jayapura City, Papua Province, Indonesia.',
            ]
        );
        City::create(
            [
                'province_id' => 1,
                'name' => 'Kabupaten Jayapura',
                'description' => 'Jayapura Regency, Papua Province, Indonesia.',
            ]
        );
        City::create(
            [
                'province_id' => 1,
                'name' => 'Keerom Regency',
                'description' => 'Keerom Regency, Papua Province, Indonesia.',
            ]
        );
    }
}
