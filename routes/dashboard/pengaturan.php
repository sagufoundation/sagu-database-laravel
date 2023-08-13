<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\PengaturanControlller;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | PENGATURAN
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

Route::controller(PengaturanControlller::class)->group(function () {

    // index
    Route::get('pengaturan', 'index')->name('dasbor.pengaturan');
    Route::get('pengaturan/{inputGroup}', 'index')->name('dasbor.pengaturan.inputGroup');

    // draft
    Route::get('pengaturan/draft', 'draft')
        ->name('dasbor.pengaturan.draft');

    // create
    Route::get('pengaturan/create', 'create')
        ->name('dasbor.pengaturan.create');

    // store
    Route::post('pengaturan', 'store')->name('dasbor.pengaturan.store');

    // show / detail
    Route::get('pengaturan/{id}/detail', 'show')
        ->name('dasbor.pengaturan.show');

    // edit
    Route::get('pengaturan/edit/{inputGroup}', 'edit')->name('dasbor.pengaturan.inputGroup');

    // update
    Route::put('pengaturan/update/{id}', 'update')->name('dasbor.pengaturan.update');

    // destroy
    Route::delete('pengaturan/{id}', 'destroy')
        ->name('dasbor.pengaturan.destroy');

    // trash
    Route::get('pengaturan/trash', 'trash')
        ->name('dasbor.pengaturan.trash');

    // restore
    Route::post('pengaturan/restore/{id}', 'restore')
        ->name('dasbor.pengaturan.restore');

    // delete
    Route::delete('pengaturan/delete/{id}', 'delete')
        ->name('dasbor.pengaturan.delete');
});
