<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\EducationController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | EDUCATIONS
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
    
        Route::controller(EducationController::class)->group(function(){

            // index
            Route::get('educations','index')
                ->name('dasbor.educations');

            // draft
            Route::get('siswa/educations/draft','draft')
                ->name('dasbor.siswa.educations.draft');

            // create
            Route::get('siswa/educations/create','create')
                ->name('dasbor.siswa.educations.create');

            // store
            Route::post('siswa/educations/store','store')
                ->name('dasbor.siswa.educations.store');

            // show
            Route::get('siswa/educations/show/{id}','show')
                ->name('dasbor.siswa.educations.show');

            // edit
            Route::get('siswa/educations/edit/{id}','edit')
                ->name('dasbor.siswa.educations.edit');

            // update
            Route::put('siswa/educations/{id}','update')
                ->name('dasbor.siswa.educations.update');

            // destroy
            Route::delete('siswa/educations/destroy/{id}','destroy');

        });
    });
