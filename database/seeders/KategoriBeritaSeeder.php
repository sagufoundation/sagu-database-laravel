<?php

namespace Database\Seeders;

use App\Models\Berita\KategoriBerita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriBerita::create([
            'name'          => 'Laporan Tahunan',
            'kategori_slug' => 'laporan-tahunan',
            'deskripsi'     => 'Laporan tahunan yang dikeluarkan oleh Dinas Lingkungan Hidup Kota Jayapura agar bisa diakses oleh masyarakat luas.',
            'status'        => 'Publish',
            'author'        => 1,
        ]);

        KategoriBerita::create([
            'name'          => 'Laporan Berkala',
            'kategori_slug' => 'laporan-berkala',
            'deskripsi'     => 'Laporan berkala yang dikeluarkan oleh Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura agar bisa diakses oleh masyarakat luas.',
            'status'        => 'Publish',
            'author'        => 1,
        ]);

        KategoriBerita::create([
            'name'          => 'Hari Lingkungan Hidup',
            'kategori_slug' => 'hari-lingkungan-hidup',
            'deskripsi'     => 'Hari lingkungan hidup secara lokal, nasional dan internasional yang selalu diselenggarakan.',
            'status'        => 'Draft',
            'author'        => 2,
        ]);

        KategoriBerita::create([
            'name'          => 'Hari Raya',
            'kategori_slug' => 'hari-raya',
            'deskripsi'     => 'Berbagai hari raya yang selalu dirayakan di tingkat lokal, nasional dan internasional.',
            'status'        => 'Publish',
            'author'        => 2,
        ]);

        KategoriBerita::create([
            'name'          => 'Siaran Pers',
            'kategori_slug' => 'siaran-pers',
            'deskripsi'     => 'Siaran pers yang dilakukan oleh Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura kepada khalayak umum.',
            'status'        => 'Publish',
            'author'        => 3,
        ]);

        KategoriBerita::create([
            'id'            => 6,
            'name'          => 'Kelestarian Laut',
            'kategori_slug' => 'kelestarian-laut',
            'deskripsi'     => '...',
            'status'        => 'Publish',
            'author'        => 3,
        ]);

        KategoriBerita::create([
            'id'            => 7,
            'name'          => 'Hutan',
            'kategori_slug' => 'hutan',
            'deskripsi'     => '...',
            'status'        => 'Publish',
            'author'        => 1,
        ]);

        KategoriBerita::create([
            'id'            => 8,
            'name'          => 'Kebersihan Kota',
            'kategori_slug' => 'kebersihan-kota',
            'deskripsi'     => '...',
            'status'        => 'Publish',
            'author'        => 2,
        ]);

        KategoriBerita::create([
            'id'            => 9,
            'name'          => 'Penghijauan',
            'kategori_slug' => 'penghijauan',
            'deskripsi'     => '...',
            'status'        => 'Publish',
            'author'        => 3,
        ]);

        KategoriBerita::create([
            'id'            => 10,
            'name'          => 'Layanan Online',
            'kategori_slug' => 'layanan-online',
            'deskripsi'     => '...',
            'status'        => 'Publish',
            'author'        => 3,
        ]);

    }
}
