<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create(
            [
                'first_name' => 'Anastasia',
                'middle_name' => 'Febriani',
                'last_name' => 'Yandong',

                // birth
                'place_of_birth' => 'place of birth',
                'date_of_birth' => 'date of birth',
                
                // pictures
                'profile_picture' => 'anastasia-yandong.jpg',
                

                // contct info
                'phone' => '082112341234',
                'email' => 'a.yandong.supvokasi2020@sagufoundation.org',
                
                // other
                'status' => 'Publish',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]);

        Siswa::create(
            [
                'first_name' => 'Apela',
                'middle_name' => '',
                'last_name' => 'Omabak',

                // birth
                'place_of_birth' => 'place of birth',
                'date_of_birth' => 'date of birth',
                
                // pictures
                'profile_picture' => 'apela-omabak.jpg',
                'ktp' => 'apela-omabak-ktp.jpg',

                // contct info
                'phone' => '082112341235',
                'email' => 'a.omabak.supvokasi2020@sagufoundation.org',
                
                // other
                'status' => 'Publish',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()


            ]);

    }
}
