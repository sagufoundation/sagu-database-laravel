<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\UserController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | PENGGUNA
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
    
        Route::controller(UserController::class)->group(function(){

            // index
            Route::get('pengguna','index')
                ->name('dasbor.pengguna');

            // draft
            Route::get('pengguna/draft','draft')
                ->name('dasbor.pengguna.draft');

            // create
            Route::get('pengguna/create','create')
                ->name('dasbor.pengguna.create');

            // store
            Route::post('pengguna','store')
                ->name('dasbor.pengguna.store');

            // show
            Route::get('pengguna/{slug}/detail','show')
                ->name('dasbor.pengguna.show');

            // edit
            Route::get('pengguna/{slug}/edit','edit')
                ->name('dasbor.pengguna.edit');

            // update
            Route::put('pengguna/{id}','update')
                ->name('dasbor.pengguna.update');

            // destroy
            Route::delete('pengguna/{id}','destroy')
                ->name('dasbor.pengguna.destroy');

            // trash
            Route::get('pengguna/trash','trash')
                ->name('dasbor.pengguna.trash');

            // restore
            Route::post('pengguna/restore/{id}','restore')
                ->name('dasbor.pengguna.restore');

            // delete
            Route::delete('pengguna/delete/{id}','delete')
                ->name('dasbor.pengguna.delete');

        });
    });
