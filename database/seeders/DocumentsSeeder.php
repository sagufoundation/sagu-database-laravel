<?php

namespace Database\Seeders;

use App\Models\Documents;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documents::create(
            [

                'student_id' => 1,
                'title' => 'KTP',
                'description' => 'Kartu Tanda Penduduk',
                'url' => 'https://sagufoundation.org/',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );
        Documents::create(
            [

                'student_id' => 2,
                'title' => 'KTP',
                'description' => 'Kartu Tanda Penduduk',
                'url' => 'https://sagufoundation.org/',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

        Documents::create(
            [

                'student_id' => 1,
                'title' => 'Akta Kelahiran',
                'description' => 'Surat Akta Kelahiran',
                'url' => 'https://sagufoundation.org/',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

        Documents::create(
            [

                'student_id' => 2,
                'title' => 'Akta Kelahiran',
                'description' => 'Surat Akta Kelahiran',
                'url' => 'https://sagufoundation.org/',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

        Documents::create(
            [

                'student_id' => 1,
                'title' => 'Ijazah SMK',
                'description' => 'Ijazah Sekolah Menengah Kejuruan',
                'url' => 'https://sagufoundation.org/',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

        Documents::create(
            [

                'student_id' => 2,
                'title' => 'Ijazah SMK',
                'description' => 'Ijazah Sekolah Menengah Kejuruan',
                'url' => 'https://sagufoundation.org/',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );


    }
}
