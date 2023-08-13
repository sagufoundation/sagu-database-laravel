<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\PesanController;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | pesan
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

    Route::controller(PesanController::class)->group(function(){

        // index
        Route::get('pesan','index')
            ->name('dasbor.pesan');



        // show / detail
        Route::get('pesan/{slug}/detail','show')->name('dasbor.pesan.show');



        // destroy
        Route::delete('pesan/{id}','destroy')
            ->name('dasbor.pesan.destroy');

        // trash
        Route::get('pesan/trash','trash')
            ->name('dasbor.pesan.trash');

        // restore
        Route::post('pesan/restore/{id}','restore')
            ->name('dasbor.pesan.restore');

        // delete
        Route::delete('pesan/delete/{id}','delete')
            ->name('dasbor.pesan.delete');

    });
