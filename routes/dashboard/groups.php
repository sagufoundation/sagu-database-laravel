<?php

// dashboard CONTROLLERS
use App\Http\Controllers\Dashboard\GroupController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | GROUP
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

// Route::group(['middleware' => ['role:administrator']], function () {
Route::group(['middleware' => ['auth']], function () {

    Route::controller(GroupController::class)->group(function () {

        // index
        Route::get('groups', 'index')->name('dashboard.groups');



        Route::group(['middleware' => ['role:administrator','auth']], function () {

            // draft
            Route::get('groups/draft', 'draft')->name('dashboard.groups.draft');

            // create
            Route::get('groups/create', 'create')->name('dashboard.groups.create');

             // store
            Route::post('groups', 'store')->name('dashboard.groups.store');

            // edit
            Route::get('groups/edit/{id}', 'edit')->name('dashboard.groups.edit');

            // update
            Route::put('groups/update/{id}', 'update')->name('dashboard.groups.update');

            // destroy
            Route::delete('groups/{id}', 'destroy')->name('dashboard.groups.destroy');

            // trash
            Route::get('groups/trash', 'trash')->name('dashboard.groups.trash');

            // restore
            Route::post('groups/restore/{id}', 'restore')->name('dashboard.groups.restore');

            // delete
            Route::delete('groups/delete/{id}', 'delete')->name('dashboard.groups.delete');

        });

        // show
        Route::get('groups/show/{id}', 'show')->name('dashboard.groups.show');

        // export program excel
        Route::get('groups/excel/{id}', 'excel_program')->name('dashboard.groups.excel');

    });
});
