<?php

namespace App\Providers;

// MODELS
use App\Models\User;
use App\Models\Siswa;

use App\Models\Banner;
use App\Models\Faq;
use App\Models\Halaman;
use App\Models\LayananOnline;
use App\Models\LinkTerkait;
use App\Models\Pengaturan;
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
        if (App::environment('production')) {
            URL::forceScheme('https');
        } elseif(App::environment('local')){
            URL::forceScheme('http');
        }

        /*
        | PAGINATORS
        |
        */
        Paginator::useBootstrap();
        // Paginator::useBootstrapFive();
        // Paginator::defaultView('view-name');

        /*
        | VISITOR QUERIES
        |
        */
        $Pengaturan = Pengaturan::first();
        $Pengaturan->visit()->withIP();

        /*
        | DATE CONFIGURATIONS
        |
        */
        $today      = Carbon::today()->toDateString();
        $bulanIni   = Carbon::now()->format('m');
        $tahunIni   = Carbon::now()->format('Y');
        $startDate  = Carbon::now()->startOfWeek();
        $endDate    = Carbon::now()->endOfWeek();

        view()->share([

            /*
            | VISITOR VARIABLES
            |
            */

            'pengaturan'                        => Pengaturan::first(),
            'faq'                               => Faq::where('status','Publish')->get(),
            'LayananOnline'                     => LayananOnline::where('status','Publish')->get(),
            'InformasiLingkungan'               => InformasiLingkungan::where('status','Publish')->get(),
            'banner'                            => Banner::where('status','publish')->first(),

            /*
            |
            | VISITOR COUNTER
            |
            */

            'totalVisitor'                      => VisitorCounter::get()->count(),
            'visitorHariIni'                    => VisitorCounter::whereDate('created_at', $today)->count(),
            'visitorMingguIni'                  => VisitorCounter::whereBetween('created_at', [$startDate, $endDate])->get()->count(),
            'visitorBulanIni'                   => VisitorCounter::whereMonth('created_at', $bulanIni)->whereYear('created_at', $tahunIni)->count(),
            'visitorTahunIni'                   => VisitorCounter::whereMonth('created_at', $bulanIni)->whereYear('created_at', $tahunIni)->count(),


            /*
            | DASBOR
            |
            | Jumlah data untuk ditampilkan di bagian dasbor
            |
            */
            
            'dasbor_jml_siswa'                 => Siswa::where('status','Publish')->count(),
            'dasbor_jml_siswa_semua'           => Siswa::count(),
            'dasbor_jml_siswa_draft'           => Siswa::where('status','Draft')->count(),

            'dasbor_jml_berita'                 => Berita::where('status','Publish')->count(),
            'dasbor_jml_berita_semua'           => Berita::count(),
            'dasbor_jml_berita_draft'           => Berita::where('status','Draft')->count(),

            'dasbor_jml_kategori'               => KategoriBerita::where('status','Publish')->count(),
            'dasbor_jml_kategori_semua'         => KategoriBerita::count(),
            'dasbor_jml_kategori_draft'         => KategoriBerita::where('status','Draft')->count(),

            'dasbor_jml_informasi_lingkungan'   => InformasiLingkungan::where('status','Publish')->count(),
            'dasbor_jml_layanan_online'         => LayananOnline::where('status','Publish')->count(),
            'dasbor_jml_link_terkait'           => LinkTerkait::where('status','Publish')->count(),

            'dasbor_jml_halaman'                => Halaman::where('status','Publish')->count(),
            'dasbor_jml_halaman_semua'          => Halaman::count(),
            'dasbor_jml_halaman_draft'          => Halaman::where('status','Draft')->count(),

            'dasbor_jml_pesan'                  => Pesan::count(),
            'dasbor_jml_pengguna'               => User::where('status','Publish')->count(),

        ]);

    }

}
