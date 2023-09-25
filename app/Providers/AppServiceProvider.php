<?php

namespace App\Providers;

// MODELS
use App\Models\Settings;
use App\Models\User;
use App\Models\students;
use App\Models\Program;

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

        view()->share([

            // Settings
            'settings' => Settings::first(),
            
            // Totals
            'dashboard_total_students' => Students::where('status','Publish')->count(),
            'dashboard_total_students_draft' => Students::where('status','Draft')->count(),
            'dashboard_total_students_semua' => Students::count(),
            
            'dashboard_total_program' => Program::where('status','Publish')->count(),            

        ]);

    }

}
