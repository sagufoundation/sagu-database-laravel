<?php

// dashboard CONTROLLERS
use App\Http\Controllers\Dashboard\Library\CategoriesController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth']], function () {


    Route::controller(CategoriesController::class)->group(function(){

        // index
        Route::get('categories','index')
            ->name('dashboard.categories');

        // draft
        Route::get('categories/draft','draft')
            ->name('dashboard.categories.draft');

        // create
        Route::get('categories/create','create')
            ->name('dashboard.categories.create');

        // store
        Route::post('categories','store')
            ->name('dashboard.categories.store');

        // show / detail
        Route::get('categories/show/{id}','show')
            ->name('dashboard.categories.show');

        // edit
        Route::get('categories/edit/{id}','edit')
            ->name('dashboard.categories.edit');

        // update
        Route::put('categories/{id}','update')
            ->name('dashboard.categories.update');

        // destroy
        Route::delete('categories/{id}','destroy')
            ->name('dashboard.categories.destroy');

        // trash
        Route::get('categories/trash','trash')
            ->name('dashboard.categories.trash');

        // restore
        Route::post('categories/restore/{id}','restore')
            ->name('dashboard.categories.restore');

        // delete
        Route::delete('categories/delete/{id}','delete')
            ->name('dashboard.categories.delete');

    });
});
