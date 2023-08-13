<?php

// DASBOR CONTROLLERS

use App\Http\Controllers\Dasbor\LayananOnlineController;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | layanan-online
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

    Route::controller(LayananOnlineController::class)->group(function(){

        // index
        Route::get('layanan-online','index')
            ->name('dasbor.layananonline');

        // draft
        Route::get('layanan-online/draft','draft')
            ->name('dasbor.layananonline.draft');

        // create
        Route::get('layanan-online/create','create')
            ->name('dasbor.layananonline.create');

        // store
        Route::post('layanan-online','store')->name('dasbor.layananonline.store');

        // show / detail
        Route::get('layanan-online/{id}/detail','show')
            ->name('dasbor.layananonline.show');

        // edit
        Route::get('layanan-online/{id}/edit','edit')
            ->name('dasbor.layananonline.edit');

        // update
        Route::put('layanan-online/{id}','update')
            ->name('dasbor.layananonline.update');

        // destroy
        Route::delete('layanan-online/{id}','destroy')
            ->name('dasbor.layananonline.destroy');

        // trash
        Route::get('layanan-online/trash','trash')
            ->name('dasbor.layananonline.trash');

        // restore
        Route::post('layanan-online/restore/{id}','restore')
            ->name('dasbor.layananonline.restore');

        // delete
        Route::delete('layanan-online/delete/{id}','delete')
            ->name('dasbor.layananonline.delete');

    });
