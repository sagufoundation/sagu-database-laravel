<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\ProgramController;

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
            Route::get('program','index')
                ->name('dasbor.program');

            // draft
            Route::get('program/draft','draft')
                ->name('dasbor.program.draft');

            // create
            Route::get('program/create','create')->name('dasbor.program.create');

            // store
            Route::post('program','store')->name('dasbor.program.store');

            // show
            Route::get('program/{slug}/detail','show')
                ->name('dasbor.program.show');

            // edit
            Route::get('program/{slug}/edit','edit')
                ->name('dasbor.program.edit');

            // update
            Route::put('program/{id}','update')
                ->name('dasbor.program.update');

            // destroy
            Route::delete('program/{id}','destroy')
                ->name('dasbor.program.destroy');

            // trash
            Route::get('program/trash','trash')
                ->name('dasbor.program.trash');

            // restore
            Route::post('program/restore/{id}','restore')
                ->name('dasbor.program.restore');

            // delete
            Route::delete('program/delete/{id}','delete')
                ->name('dasbor.program.delete');

        });
    });
