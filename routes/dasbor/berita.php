<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\BeritaController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | BERITA
    |
    | index
    | draft
    | create
    | store
    | show
    | edit
    | update
    | destroy
    | trash
    | restore
    | delete
    |--------------------------------------------------------------------------
    */

    Route::controller(BeritaController::class)->group(function(){

        // index
        Route::get('berita','index')
            ->name('dasbor.berita');

        // draft
        Route::get('berita/draft','draft')
            ->name('dasbor.berita.draft');

        // revisi
        Route::get('berita/revisi','revisi')
            ->name('dasbor.berita.revisi');

        // verifikasi
        Route::get('berita/verifikasi','verifikasi')
            ->name('dasbor.berita.verifikasi');

        // create
        Route::get('berita/create','create')
            ->name('dasbor.berita.create');

        // store
        Route::post('berita','store')
            ->name('dasbor.berita.store');

        // show
        Route::get('berita/{slug}/detail','show')
            ->name('dasbor.berita.show');

        // edit
        Route::get('berita/{slug}/edit','edit')
            ->name('dasbor.berita.edit');

        // update
        Route::put('berita/{id}','update')
            ->name('dasbor.berita.update');

        // destroy
        Route::delete('berita/{id}','destroy')
            ->name('dasbor.berita.destroy');

        // trash
        Route::get('berita/trash','trash')
            ->name('dasbor.berita.trash');

        // restore
        Route::post('berita/restore/{id}','restore')
            ->name('dasbor.berita.restore');

        // delete
        Route::delete('berita/delete/{id}','delete')
            ->name('dasbor.berita.delete');



    });
