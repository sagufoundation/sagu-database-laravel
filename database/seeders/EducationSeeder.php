<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // FORMAL EDUCATIONS
        Education::create(
            [
                'year' => '2015', // year of completion
                'user_id' => 7,
                'title' => 'SMP Negeri 1',
                'description' => 'Sekolah di SMP slama 3 tahun dengan mengambil jurusan tersedia pada sekolah. Sekolah hingga lulus di sekolah yang sama.',
                'url' => 'https://drive.google.com/',

                // other
                'category' => 'Formal',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

        Education::create(
            [
                'year' => '2016', // year of completion
                'user_id' => 7,
                'title' => 'SMK Negeri 1',
                'description' => 'Sekolah di SMK slama 3 tahun dengan mengambil jurusan tersedia pada sekolah. Sekolah hingga lulus di sekolah yang sama.',
                'url' => 'https://drive.google.com/',

                // other
                'category' => 'Formal',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

        Education::create(
            [
                'year' => '2020', // year of completion
                'user_id' => 7,
                'title' => 'SMK Katholik Tunas Bangsa Timika',
                'description' => 'Sekolah Menengah Kejuruan Program 3 Tahun, Program Keahlian : Manajemen Perkantoran, Kompetensi Keahlian : Otomatiasasi dan Tata kelola Perkantoran.',
                'url' => 'https://drive.google.com/',

                // other
                'category' => 'Formal',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

        // NON FORMAL EDUCATIONS
        Education::create(
            [
                'year' => '2015', // year of completion
                'user_id' => 7,
                'title' => 'Judul Program Pendidikan Non Formal',
                'description' => 'Contoh keterangan singkat tentang pendidikan non formal yang telah diambil oleh siswa',
                'url' => 'https://drive.google.com/',

                // other
                'category' => 'Non Formal',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

        Education::create(
            [
                'year' => '2016', // year of completion
                'user_id' => 7,
                'title' => 'Judul Program Pendidikan Non Formal',
                'description' => 'Contoh keterangan singkat tentang pendidikan non formal yang telah diambil oleh siswa',
                'url' => 'https://drive.google.com/',

                // other
                'category' => 'Non Formal',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

        Education::create(
            [
                'year' => '2020', // year of completion
                'user_id' => 7,
                'title' => 'Judul Program Pendidikan Non Formal',
                'description' => 'Contoh keterangan singkat tentang pendidikan non formal yang telah diambil oleh siswa',
                'url' => 'https://drive.google.com/',

                // other
                'category' => 'Non Formal',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

        Education::create(
            [
                'year' => '2021', // year of completion
                'user_id' => 7,
                'title' => 'Judul Program Pendidikan Non Formal Kedua',
                'description' => 'Contoh keterangan singkat tentang pendidikan non formal yang telah diambil oleh siswa',
                'url' => 'https://drive.google.com/',

                // other
                'category' => 'Non Formal',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

    }
}
