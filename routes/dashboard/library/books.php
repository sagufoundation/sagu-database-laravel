<?php

use App\Http\Controllers\Dashboard\Library\BooksController;

use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | books
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['auth']], function () { 
    
        Route::controller(BooksController::class)->group(function(){

            // index
            Route::get('books','index')
                ->name('dashboard.books');     

            // draft
            Route::get('books/draft','draft')
                ->name('dashboard.books.draft');

            // create
            Route::get('books/create','create')
                ->name('dashboard.books.create');

            // store
            Route::post('books','store')
                ->name('dashboard.books.store');

            // show
            Route::get('books/show/{id}','show')
                ->name('dashboard.books.show');

            // edit
            Route::get('books/edit/{id}','edit')
                ->name('dashboard.books.edit');

            // edit > profile
            Route::get('books/edit/profile/{id}','edit')
            ->name('dashboard.books.edit.profile');

            // update > profile
            Route::put('books/update/profile/{id}','update_profile')
            ->name('dashboard.books.update.profile');

            // destroy
            Route::delete('books/{id}','destroy')
                ->name('dashboard.books.destroy');

            // trash
            Route::get('books/trash','trash')
                ->name('dashboard.books.trash');

            // restore
            Route::post('books/restore/{id}','restore')
                ->name('dashboard.books.restore');

            // delete
            Route::delete('books/delete/{id}','delete')
                ->name('dashboard.books.delete');

            /*LOAD LOGS*/       

        });

    });
