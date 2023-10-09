<?php

// dashboard CONTROLLERS
use App\Http\Controllers\Dashboard\StudentsController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | students
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['auth']], function () {

        Route::controller(StudentsController::class)->group(function(){

            // index
            Route::get('students','index')
                ->name('dashboard.students');

            // draft
            Route::get('students/draft','draft')
                ->name('dashboard.students.draft');

            // create
            Route::get('students/create','create')
                ->name('dashboard.students.create');

            // store
            Route::post('students','store')
                ->name('dashboard.students.store');


            // show
            Route::get('students/show/{id}','show')
                ->name('dashboard.students.show');

            // edit
            Route::get('students/edit/{id}','edit')
                ->name('dashboard.students.edit');

            // // edit
            // Route::get('students/edit/{id}', function() {
            //     return redirect('students/edit/biography/{id}');
            // });

            // edit > profile
            Route::get('students/edit/profile/{id}','edit')
            ->name('dashboard.students.edit.profile');

            // edit > picture
            Route::get('students/edit/picture/{id}','edit')
            ->name('dashboard.students.edit.picture');

            // edit > biography
            Route::get('students/edit/biography/{id}','edit')
            ->name('dashboard.students.edit.biography');

            // edit > contact
            Route::get('students/edit/contact/{id}','edit')
            ->name('dashboard.students.edit.contact');

            // edit > address
            Route::get('students/edit/address/{id}','edit')
            ->name('dashboard.students.edit.address');

            // edit > documents
            Route::get('students/edit/documents/{id}','edit')
            ->name('dashboard.students.edit.documents');

            // edit > programs
            Route::get('students/edit/programs/{id}','edit')
            ->name('dashboard.students.edit.programs');

            // edit > educations
            Route::get('students/edit/educations/{id}','edit')
            ->name('dashboard.students.edit.educations');

            // edit > educations
            Route::get('students/edit/password/{id}','edit')
            ->name('dashboard.students.edit.password');






            // // update
            // Route::put('students/{id}','update')
            //     ->name('dashboard.students.update');

            // update > profile
            Route::put('students/update/profile/{id}','update_profile')
            ->name('dashboard.students.update.profile');

            // update > picture
            Route::put('students/update/picture/{id}','update_picture')
                ->name('dashboard.students.update.picture');

            // update > biography
            Route::put('students/update/biography/{id}','update_biography')
                ->name('dashboard.students.update.biography');

            // update > contact
            Route::put('students/update/contact/{id}','update_contact')
                ->name('dashboard.students.update.contact');

            // update > address
            Route::put('students/update/address/{id}','update_address')
                ->name('dashboard.students.update.address');

            // update > documents
            Route::put('students/update/documents/{id}','update_documents')
                ->name('dashboard.students.update.documents');

                // update > programs
                Route::put('students/update/programs/{id}','update_programs')
                    ->name('dashboard.students.update.programs');

            // update > educations
            Route::put('students/update/educations/{id}','update_educations')
                ->name('dashboard.students.update.educations');

            // update > change password
            Route::put('students/update/password/{id}','update_password')
                ->name('dashboard.students.update.password');



            // destroy
            Route::delete('students/{id}','destroy')
                ->name('dashboard.students.destroy');

            // trash
            Route::get('students/trash','trash')
                ->name('dashboard.students.trash');

            // restore
            Route::post('students/restore/{id}','restore')
                ->name('dashboard.students.restore');

            // delete
            Route::delete('students/delete/{id}','delete')
                ->name('dashboard.students.delete');

            // delete Programs
            Route::delete('students/delete/programs/{id}','delete_program')
            ->name('dashboard.students.delete.programs');

        });
    });
