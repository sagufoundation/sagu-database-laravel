<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dasbor')->middleware('auth')->group(function () {

    require_once 'dasbor/berita.php';
    require_once 'dasbor/berita-kategori.php';
    require_once 'dasbor/halaman.php';
    require_once 'dasbor/link-terkait.php';
    require_once 'dasbor/informasi-lingkungan.php';
    require_once 'dasbor/layanan-online.php';
    require_once 'dasbor/pesan.php';
    require_once 'dasbor/pengaturan.php';
    require_once 'dasbor/siswa.php';

});
