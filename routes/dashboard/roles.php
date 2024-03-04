<?php

// dashboard CONTROLLERS
use App\Http\Controllers\Dashboard\RoleController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['role:administrator','auth']], function () {


    Route::controller(RoleController::class)->group(function(){

        // index
        Route::get('roles','index')->name('dashboard.roles');

    });
});
