<?php

// dashboard CONTROLLERS
use App\Http\Controllers\Dashboard\DocumentsController;

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

    Route::controller(DocumentsController::class)->group(function () {

        // index
        Route::get('documents', 'index')
            ->name('dashboard.documents');

        // draft
        Route::get('students/documents/draft', 'draft')
            ->name('dashboard.students.documents.draft');

        // create
        Route::get('students/documents/create', 'create')
            ->name('dashboard.students.documents.create');

        // store
        Route::post('students/documents', 'store')
            ->name('dashboard.students.documents.store');

        // show
        Route::get('students/documents/show/{id}', 'show')
            ->name('dashboard.students.documents.show');

        // edit
        Route::get('students/documents/edit/{id}', 'edit')
            ->name('dashboard.students.documents.edit');

        // update
        Route::put('students/documents/{id}', 'update')
            ->name('dashboard.students.documents.update');

        // destroy
        Route::delete('students/documents/destroy/{id}', 'destroy');
    });
});
