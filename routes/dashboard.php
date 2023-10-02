<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->middleware('auth')->group(function () {

    require_once 'dashboard/students.php';
    // require_once 'dashboard/pengaturan.php';
    // require_once 'dashboard/pengguna.php';
    require_once 'dashboard/documents.php';
    // require_once 'dashboard/educations.php';
    require_once 'dashboard/program.php';

    /*
    | =====================
    | LIBRARY
    | =====================
    */
    require_once 'dashboard/library/books.php';



});
