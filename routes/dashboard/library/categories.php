<?php

// dashboard CONTROLLERS
use App\Http\Controllers\Dashboard\Library\CategoriesController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth']], function () {


    Route::controller(CategoriesController::class)->group(function(){

        // index
        Route::get('categories','index')
            ->name('dashboard.categories')->middleware(['auth','role:administrator|student']);

        // draft
        Route::get('categories/draft','draft')
            ->name('dashboard.categories.draft')->middleware(['auth','role:administrator']);

        // create
        Route::get('categories/create','create')
            ->name('dashboard.categories.create')->middleware(['auth','role:administrator']);

        // store
        Route::post('categories','store')
            ->name('dashboard.categories.store')->middleware(['auth','role:administrator']);

        // show / detail
        Route::get('categories/show/{slug}','show')
            ->name('dashboard.categories.show')->middleware(['auth','role:administrator']);

        // edit
        Route::get('categories/edit/{id}','edit')
            ->name('dashboard.categories.edit')->middleware(['auth','role:administrator']);

        // update
        Route::put('categories/{id}','update')
            ->name('dashboard.categories.update')->middleware(['auth','role:administrator']);

        // destroy
        Route::delete('categories/{id}','destroy')
            ->name('dashboard.categories.destroy')->middleware(['auth','role:administrator']);

        // trash
        Route::get('categories/trash','trash')
            ->name('dashboard.categories.trash')->middleware(['auth','role:administrator']);

        // restore
        Route::post('categories/restore/{id}','restore')
            ->name('dashboard.categories.restore')->middleware(['auth','role:administrator']);

        // delete
        Route::delete('categories/delete/{id}','delete')
            ->name('dashboard.categories.delete')->middleware(['auth','role:administrator']);

    });
});
