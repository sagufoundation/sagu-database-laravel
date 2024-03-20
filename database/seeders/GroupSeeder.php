<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create(
            [
                'group_title' => 'Vokasi',
                'slug' => 'vokasi',
                // 'description' => 'Beasiswa Siswa Unggul Papua Bidang Vokasi',
                // other
                'status' => 'Publish',
            ]
        );

        Group::create(
            [
                'group_title' => 'General English',
                'slug' => 'vokasi',
                // 'description' => '',
                // other
                'status' => 'Publish',
            ]
        );
    }
}
