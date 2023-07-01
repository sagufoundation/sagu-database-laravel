<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

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

                'start_date' => '2020',
                'end_date' => '-',

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

                'start_date' => '2021',
                'end_date' => '-',

                // other
                'status' => 'Publish',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

    }
}
