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
                ->name('dasbor.siswa.documents.draft');

            // create
            Route::get('siswa/documents/create','create')
                ->name('dasbor.siswa.documents.create');

            // store
            Route::post('documents','store')
                ->name('dasbor.siswa.documents.store');

            // show
            Route::get('siswa/documents/show/{id}','show')
                ->name('dasbor.siswa.documents.show');

            // edit
            Route::get('siswa/documents/edit/{id}','edit')
                ->name('dasbor.siswa.documents.edit');

            // update
            Route::put('siswa/documents/{id}','update')
                ->name('dasbor.siswa.documents.update');

            // destroy
            Route::delete('siswa/documents/destroy/{id}','destroy');

        });
    });
