<?php

namespace Database\Seeders;

use App\Models\LinkTerkait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkTerkaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Kementerian
        LinkTerkait::create([
            'author'                => 1,
            'judul_link'            => 'Kementerian Lingkungan Hidup dan Kehutanan',
            'slug'                  => 'kementerian-lingkungan-hidup-dan-kehutanan',
            'gambar'                => 'kementerian.png',
            'url'                   => 'https://www.menlhk.go.id',
        ]);

        // Provinsi Papua
        LinkTerkait::create([
            'author'                => 1,
            'judul_link'            => 'Pemerintah Daerah Provinsi Papua',
            'slug'                  => 'provinsi-papua',
            'gambar'                => 'provinsi-papua.png',
            'url'                   => 'https://www.papua.go.id',
        ]);

        // Pemerintah Kota Jayapura
        LinkTerkait::create([
            'author'                => 1,
            'judul_link'            => 'Pemerintah Kota Jayapura',
            'slug'                  => 'kota-jayapura',
            'gambar'                => 'kota-jayapura.png',
            'url'                   => 'https://jayapurakota.go.id/',
        ]);

        // Aplikasi Lapor
        LinkTerkait::create([
            'author'                => 1,
            'judul_link'            => 'Aplikasi Lapor',
            'slug'                  => 'aplikasi-lapor',
            'gambar'                => 'lapor.png',
            'url'                   => 'https://www.lapor.go.id',
        ]);

        // Aplikasi Lapor
        LinkTerkait::create([
            'author'                => 1,
            'judul_link'            => 'LPSE',
            'slug'                  => 'lpse-kota-jayapura',
            'gambar'                => 'lpse.png',
            'url'                   => 'http://lpse.jayapurakota.go.id/eproc4/',
        ]);


    }
}
