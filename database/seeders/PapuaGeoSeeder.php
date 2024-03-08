<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Province;

class PapuaGeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents('public/assets/papua/papua2.geo.json');
        $data = json_decode($json, true);

        // Iterasi setiap 'feature' dalam file JSON
        foreach ($data['features'] as $feature) {
            $geometry = json_encode($feature['geometry']); // Konversi geometry ke JSON string
            $properties = $feature['properties'];

            // Mengakses kode provinces, nama dalam 'properties'
            $kode_prov = $properties['code'];
            $name = $properties['name'];

            // Menyimpan data ke database
           $provinces = Province::create([
                'id' => $kode_prov,
                'name' => $name,
                'map' => DB::raw("ST_GeomFromGeoJSON('$geometry')"),
                // 'map' => 'tes',
                'created_at' => now(),
            ]);
            error_log('SEEDING DISTRICT : ' . $name);
        }
    }
}
