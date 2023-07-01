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
                'picture' => 'anastasia-yandong.jpg',
                

                // contct info
                'phone' => '082112341234',
                'full_address' => 'Student full address . . .',

                // emails
                'email_google' => 'anastasia@gmail.com',
                'email_outlook' => 'anastasia@outlook.com',
                'email_sagu' => 'a.yandong.supvokasi2020@sagufoundation.org',
                'email_campus_1' => 'anastasia@campus1.com',
                'email_campus_2' => 'anastasia@campus2.com',
                
                // education
                'education_history' => 'Please write student history here . . .',
                
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
                'picture' => 'apela-omabak.jpg',
                'ktp' => 'apela-omabak-ktp.jpg',

                // contct info
                'phone' => '082112341235',
                'full_address' => 'Student full address . . .',

                'email_google' => 'apela@gmail.com',
                'email_outlook' => 'apela@outlook.com',
                'email_sagu' => 'a.omabak.supvokasi2020@sagufoundation.org',
                'email_campus_1' => 'apela@campus1.com',
                'email_campus_2' => 'apela@campus2.com',
                
                // education
                'education_history' => 'Please write student history here . . .',
                
                // other
                'status' => 'Publish',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()


            ]);

    }
}
