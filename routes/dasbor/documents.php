<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\DocumentsController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | documents
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
    
        Route::controller(DocumentsController::class)->group(function(){

            // index
            Route::get('documents','index')
                ->name('dasbor.documents');

            // draft
            Route::get('siswa/documents/draft','draft')
                ->name('dasbor.documents.draft');

            // create
            Route::get('siswa/documents/create','create')
                ->name('dasbor.documents.create');

            // store
            Route::post('documents','store')
                ->name('dasbor.documents.store');

            // show
            Route::get('siswa/documents/show/{id}','show')
                ->name('dasbor.documents.show');

            // edit
            Route::get('siswa/documents/edit/{id}','edit')
                ->name('dasbor.documents.edit');

            // update
            Route::put('siswa/documents/{id}','update')
                ->name('dasbor.documents.update');

            // destroy
            Route::delete('siswa/documents/{id}','destroy')
                ->name('dasbor.documents.destroy');

            // trash
            Route::get('siswa/documents/trash','trash')
                ->name('dasbor.documents.trash');

            // restore
            Route::post('siswa/documents/restore/{id}','restore')
                ->name('dasbor.documents.restore');

            // delete
            Route::delete('siswa/documents/delete/{id}','delete')
                ->name('dasbor.documents.delete');

        });
    });
