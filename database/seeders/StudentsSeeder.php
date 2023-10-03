<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programID = [1, 2];

        $students_baru = Students::create(
            [
                'user_id' => 7,
                'province_id' => 1,

                // 'first_name' => 'Anastasia',
                // 'middle_name' => 'Febriani',
                // 'last_name' => 'Yandong',

                // 'slug' => Str::slug('anastasia-febriani-yandong'),

                // profile
                'profile' => "<p>Anastasia Febriani Yandong is a determined individual with a strong passion for pursuing higher education in vocational school. Her unwavering commitment to gaining practical skills and knowledge is evident in her relentless pursuit of excellence. Anastasia's drive and enthusiasm make her an inspiring role model for others who share her desire to succeed in vocational education.</p>
                <p>Her unwavering commitment to gaining practical skills and knowledge is evident in her relentless pursuit of excellence. </p>
                <p>Anastasia Febriani Yandong is a determined individual with a strong passion for pursuing higher education in vocational school. Her unwavering commitment to gaining practical skills and knowledge is evident in her relentless pursuit of excellence. Anastasia's drive and enthusiasm make her an inspiring role model for others who share her desire to succeed in vocational education.</p>",

                // birth
                'place_of_birth' => 'place of birth',
                'date_of_birth' => 'date of birth',


                // contct info
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

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );
        $students_baru->program()->attach($programID);
    }
}
