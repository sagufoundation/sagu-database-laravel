<?php

namespace Database\Seeders;

use App\Models\LayananOnline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananOnlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        LayananOnline::insert([
            // SIPAKOT
            [
                'judul'                 => 'SIPAKOT',
                'keterangan_singkat'    => 'Sistem Informasi Pajak Air Tanah Bagi Para Wajib Pajak di Kota Jayapura',
                'keterangan_lengkap'    => '',
                'author'                => 1,

                'gambar'                => 'gambar/layanan-online/1.png',
                'url'                   => 'https://sipakot.jayapurakota.go.id',
                'author'                => 1,
            ],
             // Pengaduan
            // [
            //     'judul'                 => 'Pengaduan',
            //     'keterangan_singkat'    => 'Layanan Pengaduan Masyarakat Terhadap Masalah Kebersihan di Kota Jayapura',
            //     'keterangan_lengkap'    => 'halaman/informasi-lingkungan',

            //     'gambar'                => 'gambar/layanan-online/2.png',
            //     'url'                   => 'https://dlhk.jayapurakota.go.id/kontak',
            //     'author'                => 1,
            // ]
        ]);

    }
}
