<?php

namespace App\Providers;

// MODELS
use App\Models\Settings;
use App\Models\User;
use App\Models\Students;
use App\Models\Program;
use App\Models\Library\Book;
use App\Models\Library\Catagories;
use App\Models\Library\Author;
use App\Models\Library\LoanBook;
use App\Models\Roles;

use App\Models\Banner;
use App\Models\Faq;
use App\Models\Halaman;
use App\Models\LayananOnline;
use App\Models\LinkTerkait;
use App\Models\Berita\Berita;
use App\Models\Berita\KategoriBerita;
use App\Models\InformasiLingkungan;
use App\Models\Pesan;
use App\Models\VisitorCounter;
// use App\Models\Pesan;


use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if(config('app.env') === 'production') { URL::forceScheme('https'); }

        // Pagination Configs
        Paginator::useBootstrap();

        // Date Configs
        $today = Carbon::today()->toDateString();
        $bulanIni = Carbon::now()->format('m');
        $tahunIni = Carbon::now()->format('Y');
        $startDate = Carbon::now()->startOfWeek();
        $endDate = Carbon::now()->endOfWeek();

        try {
            // Your super fun database stuff
            view()->share([

                // 'user_id' => Auth::user()->id,

                // Settings
                'pengaturan' => Settings::first(),
    
                // Totals
                'dashboard_total_students' =>  User::whereHas('roles',function($q){$q->where('name','student');})->where('status', 'Publish')->count(),
                'dashboard_total_students_draft' => User::whereHas('roles',function($q){$q->where('name','student');})->where('status', 'Draft')->count(),
                'dashboard_total_students_semua' => User::count(),
    
                'dashboard_total_program' => Program::where('status','Publish')->count(),
    
                // TOTALS
    
                /*
                | =========================
                | STUDENT DATABASE
                */
    
                'database_total_publish_students' =>  User::whereHas('roles',function($q){$q->where('name','student');})->where('status', 'Publish')->orWhere('status', 'Draft')->count(),
                'database_total_publish_programs' =>  Program::where('status','Publish')->orWhere('status', 'Draft')->count(),
    
    
                /*
                | =========================
                | LIBRARY
                */
    
                // FOR ADMINISTRATOR
                'database_total_publish_books' =>  Book::where('status','Publish')->orWhere('status', 'Draft')->count(),
                'database_total_publish_catagories' =>  Catagories::where('status','Publish')->orWhere('status', 'Draft')->count(),
                'database_total_publish_authors' =>  Author::where('status','Publish')->orWhere('status', 'Draft')->count(),
                'database_total_publish_loan_books' =>  LoanBook::where('status','Active')->orWhere('status', 'pending')->count(),
                
                'database_total_publish_users' =>  User::where('status','Publish')->orWhere('status', 'Draft')->count(),
                'database_total_roles' =>  Roles::count(),
                
                // FOR USER / STUDENTS
                'database_total_publish_books_forStudents' =>  Book::where('status','Publish')->count(),
                'database_total_publish_loan_books_forStudents' =>  LoanBook::where('user_id', 8)->count(), //  perlu diperbaiki agar jumlah yg tampil hanya jumlah milik user yg login
    
    
                /*
                | =========================
                | USERS
                */
    
            ]);
        } catch (\Exception $e) {
            // do nothing
        }

        

    }

}
