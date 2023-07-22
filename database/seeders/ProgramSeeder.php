<?php

namespace Database\Seeders;

use App\Models\Program;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create(
            [

                'program_title' => 'SUP Vokasi 2020',
                'short_description' => 'Beasiswa Siswa Unggul Papua Bidang Vokasi Tahun 2020',
                'full_description' => 'Beasiswa Siswa Unggul Papua Bidang Vokasi Tahun 2020 merupakan beasiswa yang diselenggarakan oleh BPSDM Provinsi Papua.',

                'program_start' => '2020',
                'program_end' => '-',

                // other
                'status' => 'Publish',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

        Program::create(
            [

                'program_title' => 'SUP 2021',
                'short_description' => 'Beasiswa Siswa Unggul Papua Tahun 2021',
                'full_description' => 'Beasiswa Siswa Unggul Papua Bidang Vokasi Tahun 2021 merupakan beasiswa yang diselenggarakan oleh BPSDM Provinsi Papua.',

                'program_start' => '2021',
                'program_end' => '-',

                // other
                'status' => 'Publish',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

        Program::create(
            [

                'program_title' => 'YKM 2020',
                'short_description' => 'Program Beasiswa Mahasiswa Yahukimo di Jayapura, Tahun 2020',
                'full_description' => 'Program beasiswa Pemerintah Daerah Kabupaten Yahukimo bagi Mahasiswa yang sedang studi di Jayapura.',

                'program_start' => '2020',
                'program_end' => '-',

                // other
                'status' => 'Publish',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

    }
}
