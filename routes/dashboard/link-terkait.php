<?php 

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\LinkTerkaitController;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | LINK TERKAIT
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

    Route::controller(LinkTerkaitController::class)->group(function(){

        // index
        Route::get('link-terkait','index')
            ->name('dasbor.link-terkait');

        // draft
        Route::get('link-terkait/draft','draft')
            ->name('dasbor.link-terkait.draft');

        // create
        Route::get('link-terkait/create','create')
            ->name('dasbor.link-terkait.create');

        // store
        Route::post('link-terkait','store')->name('dasbor.link-terkait.store');

        // show / detail
        Route::get('link-terkait/{id}/detail','show')
            ->name('dasbor.link-terkait.show');

        // edit
        Route::get('link-terkait/{id}/edit','edit')
            ->name('dasbor.link-terkait.edit');

        // update
        Route::put('link-terkait/{id}','update')
            ->name('dasbor.link-terkait.update');

        // destroy
        Route::delete('link-terkait/{id}','destroy')
            ->name('dasbor.link-terkait.destroy');

        // trash
        Route::get('link-terkait/trash','trash')
            ->name('dasbor.link-terkait.trash');

        // restore
        Route::post('link-terkait/restore/{id}','restore')
            ->name('dasbor.link-terkait.restore');
        
        // delete
        Route::delete('link-terkait/delete/{id}','delete')
            ->name('dasbor.link-terkait.delete');
            
    });