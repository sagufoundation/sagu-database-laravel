<?php

// dashboard CONTROLLERS
use App\Http\Controllers\Dashboard\Library\AuthorsController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['role:administrator|librarian','auth']], function () {


    Route::controller(AuthorsController::class)->group(function(){

        // index
        Route::get('authors','index')
            ->name('dashboard.authors');

        // draft
        Route::get('authors/draft','draft')
            ->name('dashboard.authors.draft');

        // create
        Route::get('authors/create','create')
            ->name('dashboard.authors.create');

        // store
        Route::post('authors','store')
            ->name('dashboard.authors.store');

        // show / detail
        Route::get('authors/show/{id}','show')
            ->name('dashboard.authors.show');

        // edit
        Route::get('authors/edit/{id}','edit')
            ->name('dashboard.authors.edit');

        // update
        Route::put('authors/{id}','update')
            ->name('dashboard.authors.update');

        // destroy
        Route::delete('authors/{id}','destroy')
            ->name('dashboard.authors.destroy');

        // trash
        Route::get('authors/trash','trash')
            ->name('dashboard.authors.trash');

        // restore
        Route::post('authors/restore/{id}','restore')
            ->name('dashboard.authors.restore');

        // delete
        Route::delete('authors/delete/{id}','delete')
            ->name('dashboard.authors.delete');

    });
});
