<?php

// dashboard CONTROLLERS
use App\Http\Controllers\Dashboard\StudentsProgramsController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | students
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['auth']], function () {

        Route::controller(StudentsProgramsController::class)->group(function(){

            // index
            Route::get('students/programs/{slug}','index')
                ->name('dashboard.students');

            // show
            Route::get('students/show/{id}','show')
                ->name('dashboard.students.show');

        });
    });
