<?php

namespace Database\Seeders;

use App\Models\Halaman;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @retur
     * n void
     */
    public function run()
    {

        Halaman::insert([
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Profil Dinas',
                'sub_judul'         => 'Gambaran Umum Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '1.jpg',
                'slug'              => 'profil-dinas',

                'konten_singkat'    => 'Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura telah berdiri sejak tahun 2017. DLHK Kota Jayapura memiliki Tugas dan Fungsi dan juga tata kerja secara dinas',

                'konten'            => '<blockquote><p>Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura dibentuk berdasarkan Peraturan Walikota Jaypura Nomor 47 Tahun 2017 tentang Perubahan Atas Peraturan Walikota Jayapura Nomor 31 Tahun 2016 Tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi Serta Tata Kerja Dinas-Dinas Daerah, mempunyai tugas membantu Walikota dalam melaksanakan Urusan Pemerintah yang menjadi kewenangan daerah di Bidang Lingkungan Hidup.</p></blockquote>
                                        <p>Untuk menyelenggarakan tugas sebagaimana tersebut di atas, Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura mempunyai fungsi:</p>
                                        <ol class="unorder-list mb-20">
                                            <li>Perumusan Kebijakan Daerah di Bidang Lingkungan Hidup;</li>
                                            <li>Pelaksanaan Kebijakan Daerah di Bidang Lingkungan Hidup;</li>
                                            <li>Pelaksanaan Evaluasi dan Pelaporan Daerah di Bidang Lingkungan Hidup;</li>
                                            <li>Pelaksanaan Tugas lain yang diberikan oleh Walikota sesuai dengan Tugas dan Fungsinya.;</li>
                                        </ol>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Profil Pimpinan',
                'sub_judul'         => 'Profil Kepala Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '2.jpg',
                'slug'              => 'profil-pimpinan',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Visi Misi',
                'sub_judul'         => 'Visi dan Misi Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '3.jpg',
                'slug'              => 'visi-misi',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Tugas Pokok & Fungsi',
                'sub_judul'         => 'Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '4.jpg',
                'slug'              => 'tugas-pokok-fungsi',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],

            [
                'user_id'           => 3,
                'judul_halaman'     => 'Bidang Layanan',
                'slug'              => 'bidang-layanan',
                'sub_judul'         => 'Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '5.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Informasi Lingkungan',
                'slug'              => 'informasi-lingkungan',
                'sub_judul'         => 'Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '6.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Video Profil Dinas',
                'slug'              => 'video-profil-dinas',
                'sub_judul'         => 'Video Profil Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '6.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Profil Pejabat',
                'slug'              => 'profil-pejabat',
                'sub_judul'         => 'Para Pejabat di Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '7.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Struktur Organisasi',
                'slug'              => 'struktur-organisasi',
                'sub_judul'         => 'Struktur Organisasi Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '8.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Kontak',
                'slug'              => 'kontak',
                'sub_judul'         => 'Silahkan hubungi kami melalui informasi kontak yang tertera',
                'gambar'            => '8.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Media Sosial',
                'slug'              => 'media-sosial',
                'sub_judul'         => 'Kami juga ada di berbagai platform media sosial',
                'gambar'            => '7.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Layanan Online',
                'slug'              => 'layanan-online',
                'sub_judul'         => 'Layanan online yang kami sediakan bagi masyarakat',
                'gambar'            => '6.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Informasi Lingkungan',
                'slug'              => 'informasi-lingkungan',
                'sub_judul'         => 'Kami mempublikasikan berbagai informasi tentang kinerja kami',
                'gambar'            => '5.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'RPPLH',
                'slug'              => 'rpplh',
                'sub_judul'         => 'Kami mempublikasikan berbagai informasi tentang kinerja kami',
                'gambar'            => '4.jpg',

                'konten_singkat'    => '<p>Rencana Perlindungan dan Pengelolaan Lingkungan Hidup (RPPLH) adalah suatu rencana strategis yang dirancang untuk melindungi dan mengelola lingkungan hidup dalam suatu wilayah atau area tertentu. RPPLH bertujuan untuk mengidentifikasi isu-isu lingkungan yang signifikan dan merumuskan langkah-langkah yang diperlukan untuk mengurangi dampak negatif terhadap lingkungan serta mempromosikan penggunaan yang berkelanjutan dari sumber daya alam.</p>

                <p>Dalam RPPLH, biasanya akan dilakukan analisis mendalam terhadap kondisi lingkungan, termasuk pemetaan sumber daya alam, identifikasi habitat penting, dan evaluasi kualitas air, udara, dan tanah. Berdasarkan hasil analisis ini, langkah-langkah perlindungan dan pengelolaan yang spesifik dapat ditetapkan, termasuk pengaturan kebijakan, regulasi, dan program aksi. RPPLH juga melibatkan partisipasi aktif dari masyarakat, pemangku kepentingan, dan pihak berwenang untuk memastikan bahwa kebijakan dan tindakan yang diambil mencerminkan kebutuhan dan kepentingan semua pihak terkait.</p>
    
                <p>Melalui RPPLH, diharapkan bahwa lingkungan hidup dapat dijaga kelestariannya, sumber daya alam dapat dimanfaatkan secara berkelanjutan, dan kerusakan lingkungan dapat dicegah atau diminimalkan. RPPLH juga berperan dalam mempromosikan kesadaran lingkungan di antara masyarakat serta mendorong adanya upaya kolektif untuk menjaga dan memelihara keindahan alam dan keberlanjutan ekosistem. Dengan implementasi yang tepat, RPPLH dapat menjadi instrumen penting dalam mencapai pembangunan yang berkelanjutan dan harmoni antara manusia dan lingkungan hidup.</p>',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'IKLH',
                'slug'              => 'iklh',
                'sub_judul'         => 'Kami mempublikasikan berbagai informasi tentang kinerja kami',
                'gambar'            => '3.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'AMDAL',
                'slug'              => 'amdal',
                'sub_judul'         => 'Kami mempublikasikan berbagai informasi tentang kinerja kami',
                'gambar'            => '2.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Izin Lingkungan',
                'slug'              => 'izin-lingkungan',
                'sub_judul'         => 'Kami mempublikasikan berbagai informasi tentang kinerja kami',
                'gambar'            => '1.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>
                <p>Lingkungan alam adalah segala sesuatu yang mengelilingi kita, termasuk udara, tanah, air, flora, dan fauna. Lingkungan memainkan peran penting dalam kelangsungan hidup kita dan semua makhluk hidup lainnya di bumi. Namun, saat ini, lingkungan alam kita menghadapi tantangan serius yang mengancam keberlanjutan dan keseimbangannya. Penebangan hutan yang tidak terkendali, polusi udara dan air, perubahan iklim, dan kepunahan spesies hanyalah beberapa contoh dari masalah lingkungan yang dihadapi saat ini. Untuk menjaga lingkungan kita, diperlukan tindakan kolektif dari semua individu dan pemerintah di seluruh dunia.</p>

                <p>Melindungi dan melestarikan lingkungan adalah tanggung jawab bersama. Kita perlu berusaha mengurangi emisi gas rumah kaca dengan menggunakan sumber energi terbarukan dan mengadopsi praktik berkelanjutan. Menjaga keanekaragaman hayati sangat penting, sehingga ekosistem dapat tetap seimbang. Penting juga untuk mengelola limbah dengan bijaksana dan meminimalkan penggunaan bahan kimia berbahaya. Edukasi dan kesadaran lingkungan harus ditingkatkan agar masyarakat lebih sadar akan pentingnya menjaga dan merawat lingkungan alam kita.</p>

                <p>Setiap individu memiliki peran penting dalam menjaga lingkungan. Kita bisa mulai dengan melakukan tindakan sederhana seperti mengurangi, mendaur ulang, dan menggunakan kembali barang-barang sehari-hari. Menghemat air, menggunakan kendaraan ramah lingkungan, dan mengurangi konsumsi energi juga merupakan langkah-langkah yang berdampak positif terhadap lingkungan. Selain itu, penting juga untuk mendukung organisasi dan kebijakan yang berkomitmen untuk melindungi lingkungan. Dengan menjaga lingkungan alam kita, kita tidak hanya memastikan kelangsungan hidup generasi masa kini, tetapi juga mewariskan bumi yang lestari kepada generasi mendatang.</p>',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
        ]);
    }
}
