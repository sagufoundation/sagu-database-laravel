<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\InformasiLingkungan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformasiLingkunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // InformasiLingkungan::factory()->count(10)->create();

        InformasiLingkungan::create([
            'judul'                 => 'RPPLH',
            'slug'                  => 'rpplh'.time().Str::random(12),
            'keterangan_singkat'    => 'Rencana Perlindungan dan Pengelolaan Lingkungan Hidup',
            'keterangan_lengkap'    => '<p>Rencana Perlindungan dan Pengelolaan Lingkungan Hidup (RPPLH) adalah suatu rencana strategis yang dirancang untuk melindungi dan mengelola lingkungan hidup dalam suatu wilayah atau area tertentu. RPPLH bertujuan untuk mengidentifikasi isu-isu lingkungan yang signifikan dan merumuskan langkah-langkah yang diperlukan untuk mengurangi dampak negatif terhadap lingkungan serta mempromosikan penggunaan yang berkelanjutan dari sumber daya alam.</p>

            <p>Dalam RPPLH, biasanya akan dilakukan analisis mendalam terhadap kondisi lingkungan, termasuk pemetaan sumber daya alam, identifikasi habitat penting, dan evaluasi kualitas air, udara, dan tanah. Berdasarkan hasil analisis ini, langkah-langkah perlindungan dan pengelolaan yang spesifik dapat ditetapkan, termasuk pengaturan kebijakan, regulasi, dan program aksi. RPPLH juga melibatkan partisipasi aktif dari masyarakat, pemangku kepentingan, dan pihak berwenang untuk memastikan bahwa kebijakan dan tindakan yang diambil mencerminkan kebutuhan dan kepentingan semua pihak terkait.</p>

            <p>Melalui RPPLH, diharapkan bahwa lingkungan hidup dapat dijaga kelestariannya, sumber daya alam dapat dimanfaatkan secara berkelanjutan, dan kerusakan lingkungan dapat dicegah atau diminimalkan. RPPLH juga berperan dalam mempromosikan kesadaran lingkungan di antara masyarakat serta mendorong adanya upaya kolektif untuk menjaga dan memelihara keindahan alam dan keberlanjutan ekosistem. Dengan implementasi yang tepat, RPPLH dapat menjadi instrumen penting dalam mencapai pembangunan yang berkelanjutan dan harmoni antara manusia dan lingkungan hidup.</p>',
            'author'                => 2,
            'gambar'                => '1.jpg',
            'url'                   => 'halaman/rpplh',
        ]);

        InformasiLingkungan::create([
            'judul'                 => 'IKLH',
            'slug'                  => 'iklh'.time().Str::random(12),
            'keterangan_singkat'    => 'Index Kualitas Lingkungan Hidup',
            'keterangan_lengkap'    => '',
            'author'                => 2,
            'gambar'                => '2.jpg',
            'url'                   => 'halaman/iklh',
        ]);

        InformasiLingkungan::create([
            'judul'                 => 'AMDAL',
            'slug'                  => 'amdal'.time().Str::random(12),
            'keterangan_singkat'    => 'Analisis Mengenai Dampak Lingkungan',
            'keterangan_lengkap'    => '',
            'author'                => 1,
            'gambar'                => '3.jpg',
            'url'                   => 'halaman/amdal',
        ]);

        InformasiLingkungan::create([
            'judul'                 => 'Izin Lingkungan',
            'slug'                  => 'izin-lingkungan'.time().Str::random(12),
            'keterangan_singkat'    => 'Dokumen Perizinan Lingkungan',
            'keterangan_lengkap'    => '',
            'author'                => 1,
            'gambar'                => '4.jpg',
            'url'                   => 'halaman/izin-lingkungan',
        ]);

    }
}
