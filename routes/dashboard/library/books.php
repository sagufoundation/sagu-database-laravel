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
                ->name('dashboard.books')->middleware(['auth','role:administrator|student']);

            // draft
            Route::get('books/draft','draft')
                ->name('dashboard.books.draft')->middleware(['auth','role:administrator']);

            // create
            Route::get('books/create','create')
                ->name('dashboard.books.create')->middleware(['auth','role:administrator']);

            // store
            Route::post('books','store')
                ->name('dashboard.books.store')->middleware(['auth','role:administrator']);

            // show
            Route::get('books/show/{id}','show')
                ->name('dashboard.books.show')->middleware(['auth','role:administrator|student']);

            // edit
            Route::get('books/edit/{id}','edit')
                ->name('dashboard.books.edit')->middleware(['auth','role:administrator']);

            // edit > profile
            Route::get('books/edit/profile/{id}','edit')
            ->name('dashboard.books.edit.profile')->middleware(['auth','role:administrator']);

            // update > profile
            Route::put('books/update/{id}','update')
            ->name('dashboard.books.update')->middleware(['auth','role:administrator']);

            // destroy
            Route::delete('books/{id}','destroy')
                ->name('dashboard.books.destroy')->middleware(['auth','role:administrator']);

            // trash
            Route::get('books/trash','trash')
                ->name('dashboard.books.trash')->middleware(['auth','role:administrator']);

            // restore
            Route::post('books/restore/{id}','restore')
                ->name('dashboard.books.restore')->middleware(['auth','role:administrator']);

            // delete
            Route::delete('books/delete/{id}','delete')
                ->name('dashboard.books.delete')->middleware(['auth','role:administrator']);

        });

    });
