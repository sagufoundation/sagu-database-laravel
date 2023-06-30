<?php 

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\HalamanController;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | HALAMAN
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

    Route::controller(HalamanController::class)->group(function(){

        // index
        Route::get('halaman','index')
            ->name('dasbor.halaman');

        // draft
        Route::get('halaman/draft','draft')
            ->name('dasbor.halaman.draft');

        // create
        Route::get('halaman/create','create')
            ->name('dasbor.halaman.create');

        // store
        Route::post('halaman','store')->name('dasbor.halaman.store');

        // show / detail
        Route::get('halaman/{id}/detail','show')
            ->name('dasbor.halaman.show');

        // edit
        Route::get('halaman/{id}/edit','edit')
            ->name('dasbor.halaman.edit');

        // update
        Route::put('halaman/{id}','update')
            ->name('dasbor.halaman.update');

        // destroy
        Route::delete('halaman/{id}','destroy')
            ->name('dasbor.halaman.destroy');

        // trash
        Route::get('halaman/trash','trash')
            ->name('dasbor.halaman.trash');

        // restore
        Route::post('halaman/restore/{id}','restore')
            ->name('dasbor.halaman.restore');
        
        // delete
        Route::delete('halaman/delete/{id}','delete')
            ->name('dasbor.halaman.delete');
            
    });