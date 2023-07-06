<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
                'program_id' => 1,

                'first_name' => 'Anastasia',
                'middle_name' => 'Febriani',
                'last_name' => 'Yandong',

                'slug' => Str::slug('anastasia-febriani-yandong'),

                // profile
                'profile' => "<p>Anastasia Febriani Yandong is a determined individual with a strong passion for pursuing higher education in vocational school. Her unwavering commitment to gaining practical skills and knowledge is evident in her relentless pursuit of excellence. Anastasia's drive and enthusiasm make her an inspiring role model for others who share her desire to succeed in vocational education.</p>
                <p>Her unwavering commitment to gaining practical skills and knowledge is evident in her relentless pursuit of excellence. </p>
                <p>Anastasia Febriani Yandong is a determined individual with a strong passion for pursuing higher education in vocational school. Her unwavering commitment to gaining practical skills and knowledge is evident in her relentless pursuit of excellence. Anastasia's drive and enthusiasm make her an inspiring role model for others who share her desire to succeed in vocational education.</p>",

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

                // documents
                'doc_google_sheets' => '<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQRTLzz2wreUVgwQth7b_rUChtKO2piJl-zJgGlXwO-0JFmDl5MhJ1ISpFSAiSVSkh0Li6MO6fY31jX/pubhtml?widget=true&amp;headers=false"></iframe>',
                
                // other
                'status' => 'Publish',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]);

        Siswa::create(
            [
                'program_id' => 1,
                
                'first_name' => 'Apela',
                'middle_name' => '',
                'last_name' => 'Omabak',

                'slug' => Str::slug('apela-omabak'),

                // profile
                'profile' => 'write student details',

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

                // documents
                'doc_google_sheets' => '<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQRTLzz2wreUVgwQth7b_rUChtKO2piJl-zJgGlXwO-0JFmDl5MhJ1ISpFSAiSVSkh0Li6MO6fY31jX/pubhtml?widget=true&amp;headers=false"></iframe>',
                
                // other
                'status' => 'Publish',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ]);

        Siswa::create(
                [
                    'program_id' => 1,
                    
                    'first_name' => 'Michel',
                    'middle_name' => '',
                    'last_name' => 'Kafiar',
    
                    'slug' => Str::slug('michael-kafiar'),

                    // profile
                    'profile' => 'write student details',
    
                    // birth
                    'place_of_birth' => 'place of birth',
                    'date_of_birth' => 'date of birth',
                    
                    // pictures
                    'picture' => '',
                    'ktp' => 'michal-katfiar-ktp.jpg',
    
                    // contct info
                    'phone' => '',
                    'full_address' => 'Student full address . . .',
    
                    'email_google' => 'michal@gmail.com',
                    'email_outlook' => 'michal@outlook.com',
                    'email_sagu' => 'm.kafiar.supvokasi2020@sagufoundation.org',
                    'email_campus_1' => 'michal@campus1.com',
                    'email_campus_2' => 'michal@campus2.com',
                    
                    // education
                    'education_history' => 'Please write student history here . . .',
    
                    // documents
                    'doc_google_sheets' => '',
                    
                    // other
                    'status' => 'Publish',
    
                    'created_at'        => Carbon::now(),
                    'updated_at'        => Carbon::now()
                ]);

    }
}
