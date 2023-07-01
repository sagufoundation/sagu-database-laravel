<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\SiswaController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | SISWA
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
    Route::group(['middleware' => ['role:administrator']], function () { 
    
        Route::controller(SiswaController::class)->group(function(){

            // index
            Route::get('siswa','index')
                ->name('dasbor.siswa');

            // draft
            Route::get('siswa/draft','draft')
                ->name('dasbor.siswa.draft');

            // create
            Route::get('siswa/create','create')
                ->name('dasbor.siswa.create');

            // store
            Route::post('siswa','store')
                ->name('dasbor.siswa.store');

            // show
            Route::get('siswa/show/{id}','show')
                ->name('dasbor.siswa.show');

            // edit
            Route::get('siswa/edit/{id}','edit')
                ->name('dasbor.siswa.edit');

            // update
            Route::put('siswa/{id}','update')
                ->name('dasbor.siswa.update');

            // destroy
            Route::delete('siswa/{id}','destroy')
                ->name('dasbor.siswa.destroy');

            // trash
            Route::get('siswa/trash','trash')
                ->name('dasbor.siswa.trash');

            // restore
            Route::post('siswa/restore/{id}','restore')
                ->name('dasbor.siswa.restore');

            // delete
            Route::delete('siswa/delete/{id}','delete')
                ->name('dasbor.siswa.delete');

        });
    });
