<?php

// dashboard CONTROLLERS
use App\Http\Controllers\Dashboard\ProgramsController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | PROGRAM
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

    Route::controller(ProgramsController::class)->group(function () {

        // index
        Route::get('programs', 'index')->name('dashboard.programs');

        // draft
        Route::get('programs/draft', 'draft')->name('dashboard.programs.draft');

        // create
        Route::get('programs/create', 'create')->name('dashboard.programs.create');

        // store
        Route::post('programs', 'store')->name('dashboard.programs.store');

        // show
        Route::get('programs/show/{id}', 'show')->name('dashboard.programs.show');

        // edit
        Route::get('programs/edit/{id}', 'edit')->name('dashboard.programs.edit');

        // update
        Route::put('programs/update/{id}', 'update')->name('dashboard.programs.update');

        // destroy
        Route::delete('programs/{id}', 'destroy')->name('dashboard.programs.destroy');

        // trash
        Route::get('programs/trash', 'trash')->name('dashboard.programs.trash');

        // restore
        Route::post('programs/restore/{id}', 'restore')->name('dashboard.programs.restore');

        // delete
        Route::delete('programs/delete/{id}', 'delete')->name('dashboard.programs.delete');

        // export program excel
        Route::get('programs/excel/{id}', 'excel_program')->name('dashboard.programs.excel');
            
    });
});
