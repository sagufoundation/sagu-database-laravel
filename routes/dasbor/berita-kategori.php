<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\KategoriController;
use Illuminate\Support\Facades\Route;
/*
    |--------------------------------------------------------------------------
    | KATEGORI
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

    Route::controller(KategoriController::class)->group(function(){

        // index
        Route::get('berita/kategori','index')
            ->name('dasbor.kategori');

        // draft
        Route::get('berita/kategori/draft','draft')
            ->name('dasbor.kategori.draft');

        // create
        Route::get('berita/kategori/create','create')
            ->name('dasbor.kategori.create');

        // store
        Route::post('berita/kategori','store')
            ->name('dasbor.kategori.store');

        // show / detail
        Route::get('berita/kategori/{id}/detail','show')
            ->name('dasbor.kategori.show');

        // edit
        Route::get('berita/kategori/{id}/edit','edit')
            ->name('dasbor.kategori.edit');

        // update
        Route::put('berita/kategori/{id}','update')
            ->name('dasbor.kategori.update');

        // destroy
        Route::delete('berita/kategori/{id}','destroy')
            ->name('dasbor.kategori.destroy');

        // trash
        Route::get('berita/kategori/trash','trash')
            ->name('dasbor.kategori.trash');

        // restore
        Route::post('berita/kategori/restore/{id}','restore')
            ->name('dasbor.kategori.restore');

        // delete
        Route::delete('berita/kategori/delete/{id}','delete')
            ->name('dasbor.kategori.delete');

    });
