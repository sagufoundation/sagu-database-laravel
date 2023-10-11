<?php

use App\Http\Controllers\Dashboard\Library\LoanLogsController;

use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | books
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['auth']], function () {

        Route::controller(LoanLogsController::class)->group(function(){


            // USERS AREA

            // loan-logs
            Route::get('books/loan-logs','loanLogs')
                ->name('dashboard.books.loan-logs');

            // loan-logs
            Route::get('books/loan-logs/pending','loanLogsPending')
                ->name('dashboard.books.loan-logs');

            // loan-logs
            Route::get('books/loan-logs/returned','loanLogsReturned')
                ->name('dashboard.books.loan-logs');

            // store
            Route::post('books/loan-logs/store','store')
                ->name('dashboard.books.loan-logs.store');

            // edit
            Route::get('books/loan-logs/edit/{id}','edit')
                ->name('dashboard.books.loan-logs.edit');

            // update
            Route::put('books/loan-logs/update/{id}','update')
            ->name('dashboard.books.loan-logs.update');

            // delete
            Route::delete('books/loan-logs/delete/{id}','delete')
                ->name('dashboard.books.loan-logs.delete');


        });

    });
