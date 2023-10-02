<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dashboard\ProgramController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | PROGRAM
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

        Route::controller(ProgramController::class)->group(function(){

            // index
            Route::get('programs','index')->name('dasbor.program');

            // draft
            Route::get('programs/draft','draft')->name('dasbor.program.draft');

            // create
            Route::get('programs/create','create')->name('dasbor.program.create');

            // store
            Route::post('programs','store')->name('dasbor.program.store');

            // show
            Route::get('programs/show/{id}','show')->name('dasbor.program.show');

            // edit
            Route::get('programs/edit/{id}','edit')->name('dasbor.program.edit');

            // update
            Route::put('programs/{id}','update')->name('dasbor.program.update');

            // destroy
            Route::delete('programs/{id}','destroy')->name('dasbor.program.destroy');

            // trash
            Route::get('programs/trash','trash')->name('dasbor.program.trash');

            // restore
            Route::post('programs/restore/{id}','restore')->name('dasbor.program.restore');

            // delete
            Route::delete('programs/delete/{id}','delete')->name('dasbor.program.delete');

        });
    });
