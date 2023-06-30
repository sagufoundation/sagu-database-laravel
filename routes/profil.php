<?php

use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | PROFIL
    |
    | index
    | change password
    | upload picture
    |--------------------------------------------------------------------------
    */

Route::prefix('dasbor')->middleware('auth')->group(function () {

    Route::controller(ProfilController::class)->group(function(){

        // index
        Route::get('akun-saya','index')
            ->name('dasbor.akunsaya');

        // update
        Route::put('akun-saya/update/{id}','update')
            ->name('dasbor.akunsaya.update');

        // change password
        Route::post('akun-saya/changePassword','changePassword')
            ->name('dasbor.akunsaya.changePassword');


    });


});
