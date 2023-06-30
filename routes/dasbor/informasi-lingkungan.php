<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\InformasiLingkunganController;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | informasi-lingkungan
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

    Route::controller(InformasiLingkunganController::class)->group(function(){

        // index
        Route::get('informasi-lingkungan','index')
            ->name('dasbor.informasilingkungan');

        // draft
        Route::get('informasi-lingkungan/draft','draft')
            ->name('dasbor.informasilingkungan.draft');

        // create
        Route::get('informasi-lingkungan/create','create')
            ->name('dasbor.informasilingkungan.create');

        // store
        Route::post('informasi-lingkungan','store')->name('dasbor.informasilingkungan.store');

        // show / detail
        Route::get('informasi-lingkungan/{id}/detail','show')
            ->name('dasbor.informasilingkungan.show');

        // edit
        Route::get('informasi-lingkungan/{id}/edit','edit')
            ->name('dasbor.informasilingkungan.edit');

        // update
        Route::put('informasi-lingkungan/{id}','update')
            ->name('dasbor.informasilingkungan.update');

        // destroy
        Route::delete('informasi-lingkungan/{id}','destroy')
            ->name('dasbor.informasilingkungan.destroy');

        // trash
        Route::get('informasi-lingkungan/trash','trash')
            ->name('dasbor.informasilingkungan.trash');

        // restore
        Route::post('informasi-lingkungan/restore/{id}','restore')
            ->name('dasbor.informasilingkungan.restore');

        // delete
        Route::delete('informasi-lingkungan/delete/{id}','delete')
            ->name('dasbor.informasilingkungan.delete');

    });
