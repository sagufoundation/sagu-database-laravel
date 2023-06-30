<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\SliderController;
use App\Http\Controllers\Dasbor\ArtikelController;
use App\Http\Controllers\Dasbor\GambarArtikelController;
use App\Http\Controllers\Dasbor\HalamanController;
use App\Http\Controllers\Dasbor\BannerController;
use App\Http\Controllers\Dasbor\AlbumController;
use App\Http\Controllers\Dasbor\FaqController;
use App\Http\Controllers\Dasbor\FotoController;
use App\Http\Controllers\Dasbor\PengaturanControlller;
use App\Http\Controllers\Dasbor\VideoController;
use App\Http\Controllers\Dasbor\SistemController;
use App\Http\Controllers\Dasbor\PersonController;
use App\Http\Controllers\Dasbor\RoleController;

// AUTHOR CONTROLLERS
use App\Http\Controllers\Author\BeritaController as AuthorBeritaController;
use App\Http\Controllers\Author\KategoriController;

// OTHER CONTROLLERS
use App\Http\Controllers\PengajuanPertanyaanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('dasbor')->middleware('auth')->group(function () {


    Route::get('/artikel', function () {
        return view('dasbor.pages.artikel.list');
    });
    Route::get('/artikel/create', function () {
        return view('dasbor.pages.artikel.form');
    });

    Route::controller(AuthorBeritaController::class)->group(function(){
        Route::get('berita','index')->name('dasbor.berita');
        Route::get('berita/draft','draft')->name('dasbor.berita.draft');
        Route::get('berita/revisi','revisi')->name('dasbor.berita.revisi');
        Route::get('berita/create','create')->name('dasbor.berita.create')->middleware(['role:author']);
        Route::post('berita','store')->name('dasbor.berita.store')->middleware(['role:author']);
        Route::get('berita/{id}/edit','edit')->name('dasbor.berita.edit')->middleware(['role:author']);
        Route::get('berita/{id}/detail','show')->name('dasbor.berita.show');
        Route::put('berita/{id}','update')->name('dasbor.berita.update')->middleware(['role:author']);
        Route::delete('berita/{id}','destroy')->name('dasbor.berita.destroy')->middleware(['role:author']);
        Route::get('berita/trash','trash')->name('dasbor.berita.trash')->middleware(['role:author']);
        Route::post('berita/restore/{id}','restore')->name('dasbor.berita.restore')->middleware(['role:author']);
        Route::delete('berita/delete/{id}','delete')->name('dasbor.berita.delete')->middleware(['role:author']);

        Route::put('berita/status/update/{id}','updateStatus')->name('dasbor.berita.updateStatus')->middleware(['role:supervisor']);
        Route::get('berita/status/{id}','editStatus')->name('dasbor.berita.editStatus')->middleware(['role:supervisor']);

    });

    Route::controller(PengaturanControlller::class)->group(function(){

        Route::get('pengaturan','index')->name('dasbor.pengaturan');
        Route::get('pengaturan/{id}/detail','show')->name('dasbor.pengaturan.show');
        Route::get('pengaturan/{id}/ubah','edit')->name('dasbor.pengaturan.edit');
        Route::put('pengaturan/update/{id}','update')->name('dasbor.pengaturan.update');

    });

    Route::controller(PengajuanPertanyaanController::class)->group(function(){

        Route::get('pengajuan','index')->name('dasbor.pengajuan');
        Route::get('pengajuan/{id}/detail','show')->name('dasbor.pengajuan.show');
        Route::delete('pengajuan/{id}','destroy')->name('dasbor.pengajuan.destroy');
        Route::get('pengajuan/trash','trash')->name('dasbor.pengajuan.trash');
        Route::post('pengajuan/restore/{id}','restore')->name('dasbor.pengajuan.restore');
        Route::delete('pengajuan/delete/{id}','delete')->name('dasbor.pengajuan.delete');

    });

    Route::controller(FaqController::class)->group(function(){
        Route::get('faq','index')->name('dasbor.faq');
        Route::get('faq/draft','draft')->name('dasbor.faq.draft');
        Route::get('faq/create','create')->name('dasbor.faq.create');
        Route::post('faq','store')->name('dasbor.faq.store');
        Route::get('faq/{id}/edit','edit')->name('dasbor.faq.edit');
        Route::get('faq/{id}/detail','show')->name('dasbor.faq.show');
        Route::put('faq/update/{id}','update')->name('dasbor.faq.update');
        Route::delete('faq/{id}','destroy')->name('dasbor.faq.destroy');
        Route::get('faq/trash','trash')->name('dasbor.faq.trash');
        Route::post('faq/restore/{id}','restore')->name('dasbor.faq.restore');
        Route::delete('faq/delete/{id}','delete')->name('dasbor.faq.delete');
    });

    Route::controller(KategoriController::class)->group(function(){
        Route::get('kategori','index')->name('dasbor.kategori');
        Route::get('kategori/draft','draft')->name('dasbor.kategori.draft');
        Route::get('kategori/create','create')->name('dasbor.kategori.create')->middleware(['role:author']);
        Route::post('kategori','store')->name('dasbor.kategori.store')->middleware(['role:author']);
        Route::get('kategori/{id}/edit','edit')->name('dasbor.kategori.edit')->middleware(['role:author']);
        Route::put('kategori/{id}','update')->name('dasbor.kategori.update')->middleware(['role:author']);
        Route::delete('kategori/{id}','destroy')->name('dasbor.kategori.destroy')->middleware(['role:author']);
        Route::get('kategori/trash','trash')->name('dasbor.kategori.trash')->middleware(['role:author']);
        Route::post('kategori/restore/{id}','restore')->name('dasbor.kategori.restore')->middleware(['role:author']);
        Route::delete('kategori/delete/{id}','delete')->name('dasbor.kategori.delete')->middleware(['role:author']);
    });


    Route::controller(SliderController::class)->group(function(){
        Route::get('slider','index')->name('dasbor.slider');
        Route::get('slider/draft','draft')->name('dasbor.slider.draft');
        Route::get('slider/create','create')->name('dasbor.slider.create');
        Route::post('slider','store')->name('dasbor.slider.store');
        Route::get('slider/{id}/edit','edit')->name('dasbor.slider.edit');
        Route::put('slider/{id}','update')->name('dasbor.slider.update');
        Route::delete('slider/{id}','destroy')->name('dasbor.slider.destroy');
        Route::get('slider/trash','trash')->name('dasbor.slider.trash');
        Route::post('slider/restore/{id}','restore')->name('dasbor.slider.restore');
        Route::delete('slider/delete/{id}','delete')->name('dasbor.slider.delete');
    });



Route::controller(ArtikelController::class)->group(function(){
    Route::get('artikel','index')->name('dasbor.artikel');
    Route::get('artikel/draft','draft')->name('dasbor.artikel.draft');
    Route::get('artikel/create','create')->name('dasbor.artikel.create');
    Route::post('artikel','store')->name('dasbor.artikel.store');
    Route::get('artikel/{id}/edit','edit')->name('dasbor.artikel.edit');
    Route::put('artikel/{id}','update')->name('dasbor.artikel.update');
    Route::delete('artikel/{id}','destroy')->name('dasbor.artikel.destroy');
    Route::get('artikel/trash','trash')->name('dasbor.artikel.trash');
    Route::post('artikel/restore/{id}','restore')->name('dasbor.artikel.restore');
    Route::delete('artikel/delete/{id}','delete')->name('dasbor.artikel.delete');
});


Route::controller(GambarArtikelController::class)->group(function(){
    Route::get('artikel/{id}/gambar','index')->name('dasbor.artikel.gambar');


    Route::post('artikel/gambar','store')->name('dasbor.artikel.gambar.store');

    Route::put('artikel/gambar/{id}/primary','update')->name('app/artikel/gambar/primary');
    Route::delete('artikel/gambar/{id}/destroy','destroy')->name('dasbor.artikel.gambar.destroy');

});


Route::controller(HalamanController::class)->group(function(){
    Route::get('halaman','index')->name('dasbor.halaman');
    Route::get('halaman/draft','draft')->name('dasbor.halaman.draft');
    Route::get('halaman/create','create')->name('dasbor.halaman.create');
    Route::post('halaman','store')->name('dasbor.halaman.store');
    Route::get('halaman/{id}/edit','edit')->name('dasbor.halaman.edit');
    Route::get('halaman/{id}/detail','show')->name('dasbor.halaman.show');
    Route::put('halaman/{id}','update')->name('dasbor.halaman.update');
    Route::delete('halaman/{id}','destroy')->name('dasbor.halaman.destroy');
    Route::get('halaman/trash','trash')->name('dasbor.halaman.trash');
    Route::post('halaman/restore/{id}','restore')->name('dasbor.halaman.restore');
    Route::delete('halaman/delete/{id}','delete')->name('dasbor.halaman.delete');
});


Route::controller(BannerController::class)->group(function(){
    Route::get('banner','index')->name('dasbor.banner');
    Route::get('banner/draft','draft')->name('dasbor.banner.draft');

    // Route::get('banner/create','create')->name('dasbor.banner.create');
    // Route::post('banner','store')->name('dasbor.banner.store');

    Route::get('banner/{id}/detail','show')->name('dasbor.banner.show');
    Route::get('banner/{id}/edit','edit')->name('dasbor.banner.edit');
    Route::put('banner/{id}','update')->name('dasbor.banner.update');
    Route::delete('banner/{id}','destroy')->name('dasbor.banner.destroy');
    Route::get('banner/trash','trash')->name('dasbor.banner.trash');
    Route::post('banner/restore/{id}','restore')->name('dasbor.banner.restore');
    Route::delete('banner/delete/{id}','delete')->name('dasbor.banner.delete');
});



Route::controller(AlbumController::class)->group(function(){
    Route::get('album','index')->name('dasbor.album');
    Route::get('album/draft','draft')->name('dasbor.album.draft');
    Route::get('album/create','create')->name('dasbor.album.create');
    Route::post('album','store')->name('dasbor.album.store');
    Route::get('album/{id}/edit','edit')->name('dasbor.album.edit');
    Route::put('album/{id}','update')->name('dasbor.album.update');
    Route::delete('album/{id}','destroy')->name('dasbor.album.destroy');
    Route::get('album/trash','trash')->name('dasbor.album.trash');
    Route::post('album/restore/{id}','restore')->name('dasbor.album.restore');
    Route::delete('album/delete/{id}','delete')->name('dasbor.album.delete');
});


Route::controller(FotoController::class)->group(function(){
    Route::get('album/{id}/foto','index')->name('dasbor.album.foto');


    Route::post('album/foto','store')->name('dasbor.album.foto.store');

    Route::put('album/foto/{id}/primary','update')->name('app/album/foto/primary');
    Route::delete('album/foto/{id}/destroy','destroy')->name('dasbor.album.foto.destroy');

});



Route::controller(VideoController::class)->group(function(){
    Route::get('video','index')->name('dasbor.video');
    Route::get('video/draft','draft')->name('dasbor.video.draft');
    Route::get('video/create','create')->name('dasbor.video.create');
    Route::post('video','store')->name('dasbor.video.store');
    Route::get('video/{id}/edit','edit')->name('dasbor.video.edit');
    Route::put('video/{id}','update')->name('dasbor.video.update');
    Route::delete('video/{id}','destroy')->name('dasbor.video.destroy');
    Route::get('video/trash','trash')->name('dasbor.video.trash');
    Route::post('video/restore/{id}','restore')->name('dasbor.video.restore');
    Route::delete('video/delete/{id}','delete')->name('dasbor.video.delete');
});

Route::controller(SistemController::class)->group(function(){
    Route::get('sistem','index')->name('dasbor.sistem');
    Route::get('sistem/logo','logo')->name('dasbor.sistem.logo');
    Route::get('sistem/icon','icon')->name('dasbor.sistem.icon');
    Route::put('sistem/icon/{id}','updateicon')->name('dasbor.sistem.icon.update');
    Route::put('sistem/logo/{id}','updatelogo')->name('dasbor.sistem.logo.update');

    Route::get('sistem/{id}/edit','edit')->name('dasbor.sistem.edit');
    Route::put('sistem/{id}','update')->name('dasbor.sistem.update');


});


Route::controller(PersonController::class)->group(function(){
    Route::get('person','index')->name('dasbor.person');
    Route::get('person/draft','draft')->name('dasbor.person.draft');
    Route::get('person/create','create')->name('dasbor.person.create');
    Route::post('person','store')->name('dasbor.person.store');
    Route::get('person/{id}/edit','edit')->name('dasbor.person.edit');
    Route::put('person/{id}','update')->name('dasbor.person.update');
    Route::delete('person/{id}','destroy')->name('dasbor.person.destroy');
    Route::get('person/trash','trash')->name('dasbor.person.trash');
    Route::post('person/restore/{id}','restore')->name('dasbor.person.restore');
    Route::delete('person/delete/{id}','delete')->name('dasbor.person.delete');
});



Route::controller(RoleController::class)->group(function(){
    Route::get('role','index')->name('dasbor.role');
    Route::get('role/draft','draft')->name('dasbor.role.draft');
    Route::get('role/create','create')->name('dasbor.role.create');
    Route::post('role','store')->name('dasbor.role.store');
    Route::get('role/{id}/edit','edit')->name('dasbor.role.edit');
    Route::put('role/{id}','update')->name('dasbor.role.update');
    Route::delete('role/{id}','destroy')->name('dasbor.role.destroy');
    Route::get('role/trash','trash')->name('dasbor.role.trash');
    Route::post('role/restore/{id}','restore')->name('dasbor.role.restore');
    Route::delete('role/delete/{id}','delete')->name('dasbor.role.delete');
});









});
