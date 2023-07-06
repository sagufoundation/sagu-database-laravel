<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\SiswaController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | SISWA
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
    
        Route::controller(SiswaController::class)->group(function(){

            // index
            Route::get('siswa','index')
                ->name('dasbor.siswa');

            // draft
            Route::get('siswa/draft','draft')
                ->name('dasbor.siswa.draft');

            // create
            Route::get('siswa/create','create')
                ->name('dasbor.siswa.create');

            // store
            Route::post('siswa','store')
                ->name('dasbor.siswa.store');


            // show
            Route::get('siswa/show/{id}','show')
                ->name('dasbor.siswa.show');

            // edit
            Route::get('siswa/edit/{id}','edit')
                ->name('dasbor.siswa.edit');

            // // edit
            // Route::get('siswa/edit/{id}', function() {
            //     return redirect('siswa/edit/biography/{id}');
            // });

            // edit > profile
            Route::get('siswa/edit/profile/{id}','edit')
            ->name('dasbor.siswa.edit.profile');

            // edit > picture
            Route::get('siswa/edit/picture/{id}','edit')
            ->name('dasbor.siswa.edit.picture');

            // edit > biography
            Route::get('siswa/edit/biography/{id}','edit')
            ->name('dasbor.siswa.edit.biography');

            // edit > contact
            Route::get('siswa/edit/contact/{id}','edit')
            ->name('dasbor.siswa.edit.contact');

            // edit > address
            Route::get('siswa/edit/address/{id}','edit')
            ->name('dasbor.siswa.edit.address');

            // edit > documents
            Route::get('siswa/edit/documents/{id}','edit')
            ->name('dasbor.siswa.edit.documents');

            // edit > educations
            Route::get('siswa/edit/educations/{id}','edit')
            ->name('dasbor.siswa.edit.educations');






            // // update
            // Route::put('siswa/{id}','update')
            //     ->name('dasbor.siswa.update');

            // update > profile
            Route::put('siswa/update/profile/{id}','update_profile')
            ->name('dasbor.siswa.update.profile');

            // update > picture
            Route::put('siswa/update/picture/{id}','update_picture')
                ->name('dasbor.siswa.update.picture');

            // update > biography
            Route::put('siswa/update/biography/{id}','update_biography')
                ->name('dasbor.siswa.update.biography');

            // update > contact
            Route::put('siswa/update/contact/{id}','update_contact')
                ->name('dasbor.siswa.update.contact');

            // update > address
            Route::put('siswa/update/address/{id}','update_address')
                ->name('dasbor.siswa.update.address');

            // update > documents
            Route::put('siswa/update/documents/{id}','update_documents')
                ->name('dasbor.siswa.update.documents');

            // update > educations
            Route::put('siswa/update/educations/{id}','update_educations')
                ->name('dasbor.siswa.update.educations');








            // destroy
            Route::delete('siswa/{id}','destroy')
                ->name('dasbor.siswa.destroy');

            // trash
            Route::get('siswa/trash','trash')
                ->name('dasbor.siswa.trash');

            // restore
            Route::post('siswa/restore/{id}','restore')
                ->name('dasbor.siswa.restore');

            // delete
            Route::delete('siswa/delete/{id}','delete')
                ->name('dasbor.siswa.delete');

        });
    });
