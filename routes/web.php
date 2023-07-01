<?php

// VISITOR CONTROLLERS

use App\Http\Controllers\Dasbor\PesanController;
use App\Http\Controllers\Visitor\BerandaController;

// DASBOR CONTROLLERS
use App\Http\Controllers\DasborController;

// OTHER CONTROLLERS
use App\Http\Controllers\UserController;

// OTHER CLASSES
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\App;


/*
|--------------------------------------------------------------------------
| VISITOR
|--------------------------------------------------------------------------
*/

// Mengalihkan he alamat beranda
Route::get('/', function () {
    return redirect('/beranda');
});

// BERANDA
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

// HALAMAN

/*
| HALAMAN
| menampilkan halaman secara detail berdasarkan slug
| halaman dipasang secara manual menggunakan manajemen url/link halaman
*/
Route::get('/halaman', [BerandaController::class, 'halamanIndex'])->name('halaman');
Route::get('/halaman/{slug}', [BerandaController::class, 'halamanShow'])->name('halaman.slug');

/*
| BERITA
| - menampilkan semua berita
| - menampilkan berita berdasarkan slug
| - menampilkan berita berdasarkan kategori
*/

// - menampilkan semua berita
Route::get('/berita', [BerandaController::class, 'beritaIndex'])->name('berita');

// - menampilkan berita berdasarkan slug
Route::get('/berita/{slug}', [BerandaController::class, 'beritaShow'])->name('berita.slug');

// - menampilkan berita berdasarkan kategori
Route::get('/berita/kategori/{kategori}', [BerandaController::class, 'beritaKategori'])->name('berita.kategori.slug');

// Json berita
Route::post('/berita-json', [BerandaController::class, 'beritaJson'])->name('berita-json');


/*
| KONTAK
| menampilkan halaman kontak
|
*/

Route::get('/kontak', [BerandaController::class, 'kontak'])->name('kontak');



/*
| PENGAJUAN / PESAN
|
*/

Route::post('/pesan', [BerandaController::class, 'pesanStore'])->name('visitor.pesan.store');
Route::get('/pesan/terkirim', [BerandaController::class, 'pesanTerkirim'])->name('visitor.pesan.terkirim');
Route::get('/reload-captcha', [BerandaController::class, 'reloadCaptcha']);



Auth::routes([
    'register' => false
]);


/*
| CK EDITOR
|
*/

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['prefix' => '/dasbor', 'middleware' => ['web', 'auth']], function () {

        Route::get('/', [DasborController::class, 'index'])->name('dasbor');

        // ADMIN
        Route::group(['middleware' => ['role:administrator']], function () {

            // Route::get('pengguna', [UserController::class, 'index'])->name('pengguna.index');
            // Route::get('pengguna/tambah', [UserController::class, 'create'])->name('pengguna.create');
            // Route::get('pengguna/draft', [UserController::class, 'draft'])->name('pengguna.draft');
            // Route::get('pengguna/trash', [UserController::class, 'trash'])->name('pengguna.trash');

            // Route::get('pengguna/{id}/detail', [UserController::class, 'show'])->name('pengguna.show');
            // Route::get('pengguna/{id}/edit', [UserController::class, 'edit'])->name('pengguna.edit');

            // Route::post('pengguna/store', [UserController::class, 'store'])->name('pengguna.store');
            // Route::post('pengguna/pulihkan/{id}', [UserController::class, 'restore'])->name('pengguna.restore');

            // Route::delete('pengguna/hapus-permanen/{id}', [UserController::class, 'destroy'])->name('pengguna.destroy');
            // Route::delete('pengguna/hapus/{id}', [UserController::class, 'delete'])->name('pengguna.delete');

            // Route::put('pengguna/update/{id}', [UserController::class, 'update'])->name('pengguna.update');

            // Route::controller(UserController::class)->group(function(){

            //     Route::get('/pengguna','index')->name('pengguna.index');
            //     Route::get('pengguna','create')->name('dasbor.pengguna.create');
            //     Route::post('pengguna','store')->name('dasbor.pengguna.store');
            //     Route::get('pengguna/{id}/detail','show')->name('dasbor.pengguna.show');
            //     Route::delete('pengguna/{id}','destroy')->name('dasbor.pengguna.destroy');
            //     Route::get('pengguna/trash','trash')->name('dasbor.pengguna.trash');
            //     Route::post('pengguna/restore/{id}','restore')->name('dasbor.pengguna.restore');
            //     Route::delete('pengguna/delete/{id}','delete')->name('dasbor.pengguna.delete');

            // });


        });

    });

require_once 'dasbor.php';
require_once 'profil.php';


if (App::environment('production')) {
    URL::forceScheme('https');
}