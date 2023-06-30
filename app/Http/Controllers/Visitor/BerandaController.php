<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

// MODELS
use App\Models\Berita\Berita;
use App\Models\Berita\KategoriBerita;
use App\Models\Halaman;
use App\Models\Banner;
use App\Models\Pesan;

use App\Models\LinkTerkait;
use App\Models\LayananOnline;
use App\Models\InformasiLingkungan;
use App\Models\Faq;

class BerandaController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | INDEX / BERANDA
    | - beritas
    | - linkTerkaits
    | - layananOnlines
    | - informasiLingkungans
    | - faqs
    |--------------------------------------------------------------------------
    */

    public function index()
    {

        // data berita di halaman beranda
        $beritas = Berita::orderBy('id', 'desc')->where('status', 'publish')->paginate(6);

        // data layanan online di halaman beranda
        $layananOnlines = LayananOnline::orderBy('id', 'asc')->where('status', 'publish')->paginate();

        // data informasi lingkungan di halaman beranda
        $informasiLingkungans = InformasiLingkungan::orderBy('id', 'asc')->where('status', 'publish')->paginate();

        // data faq di halaman beranda
        $faqs = Faq::orderBy('id', 'desc')->where('status', 'publish')->paginate();

        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id', 'desc')->where('status', 'publish')->paginate();

        // data banner
        $banner_1 = Banner::whereId(1)->first();
        $banner_2 = Banner::whereId(2)->first();
        $banner_3 = Banner::whereId(3)->first();

        return  view(
            'visitor.index',
            compact(
                'beritas',
                'layananOnlines',
                'informasiLingkungans',
                'faqs',
                'linkTerkaits',
                'banner_1',
                'banner_2',
                'banner_3',
            )
        );
    }

    /*
    |--------------------------------------------------------------------------
    | BERITA
    | - index
    | - show
    | - category
    |--------------------------------------------------------------------------
    */

    // BERITA > INDEX
    public function beritaIndex()
    {


        // Slug
        $slug = null;

        // $datas = Berita::where('status', 'publish')->paginate(2);


        $datas = Berita::where([

            [function ($query) {
                if (($k = request()->k)) {
                    $query->orWhere('judul', 'LIKE', '%' . $k . '%')
                        // ->orWhere('subjudul', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'publish')->paginate();


        $kategoris = KategoriBerita::where('status', 'publish')->paginate(6);
        $pageTitle = 'Berita';

        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id', 'desc')->where('status', 'publish')->paginate();

        // data banner
        $banner_1 = Banner::whereId(1)->first();
        $banner_2 = Banner::whereId(2)->first();
        $banner_3 = Banner::whereId(3)->first();

        return  view(
            'visitor.pages.berita.index',
            compact(
                'datas',
                'pageTitle',
                'kategoris',
                'linkTerkaits',
                'banner_1',
                'banner_2',
                'banner_3',
                'slug',
            )
        );
    }

    // BERITA > SHOW
    public function beritaShow($slug)
    {
        $data = Berita::where('slug', $slug)->first();

        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id', 'desc')->where('status', 'publish')->paginate();

        // data banner
        $banner_1 = Banner::whereId(1)->first();
        $banner_2 = Banner::whereId(2)->first();
        $banner_3 = Banner::whereId(3)->first();

        return  view(
            'visitor.pages.berita.show',
            compact(
                'data',
                'linkTerkaits',
                'banner_1',
                'banner_2',
                'banner_3',
            )
        );
    }

    // BERITA > CATEGORY
    public function beritaKategori($kategori_slug)
    {

        $datas = Berita::select('*')
            ->join(
                'kategori_beritas',
                'kategori_beritas.id', '=', 'beritas.category_id'
            )
            ->where('kategori_beritas.kategori_slug', $kategori_slug)
            ->paginate();
        
        // // =======================
        // // get kategory id from kategory request
        // $getKategoriID = KategoriBerita::where('kategori_slug', $kategori)->first();
        
        // // get berita by category id
        // $datas = Berita::where('category_id', $getKategoriID->id)->paginate();
        // // =======================

        // Slug
        $slug = $kategori_slug;

        $kategoris = KategoriBerita::where('status', 'publish')->paginate(6);
        $pageTitle = 'Berita';

        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id', 'desc')->where('status', 'publish')->paginate();

        // data banner
        $banner_1 = Banner::whereId(1)->first();
        $banner_2 = Banner::whereId(2)->first();
        $banner_3 = Banner::whereId(3)->first();

        return  view(
            'visitor.pages.berita.index',
            compact(
                'datas',
                'kategoris',
                'pageTitle',
                'linkTerkaits',
                'banner_1',
                'banner_2',
                'banner_3',
                'slug',
            )
        );
    }

    // JSON BERITA
    public function beritaJson(Request $request)
    {
        $keyword    = $request->keyword;
        $page       = $request->noAwal; // Halaman yang ingin ditampilkan
        $perPage    = 4; // Jumlah data per halaman
        $kategori    = $request->kategori;
        $dataKategori = null;

        $all = DB::table('beritas')
                ->selectRaw('beritas.id')
                ->selectRaw('beritas.slug')
                ->selectRaw('beritas.gambar')
                ->selectRaw('beritas.judul')
                ->selectRaw('beritas.created_at')
                ->selectRaw('beritas.konten_singkat')
                ->selectRaw('users.name')
                ->selectRaw('kategori_beritas.kategori_slug')
                ->leftJoin('kategori_beritas', 'beritas.category_id', '=', 'kategori_beritas.id')
                ->leftJoin('users', 'beritas.user_id', '=', 'users.id')
                ->where('beritas.status', '=', 'Publish')
                ->skip(($page - 1) * $perPage)
                ->take($perPage)
                ->orderBy('beritas.id', 'desc')
                ->get();

        $count =  DB::table('beritas')->where('beritas.status', '=', 'Publish')->count();

        if ($keyword != null) {

            $all = DB::table('beritas')
                ->selectRaw('beritas.id')
                ->selectRaw('beritas.slug')
                ->selectRaw('beritas.gambar')
                ->selectRaw('beritas.judul')
                ->selectRaw('beritas.created_at')
                ->selectRaw('beritas.konten_singkat')
                ->selectRaw('users.name')
                ->selectRaw('kategori_beritas.kategori_slug')
                ->leftJoin('kategori_beritas', 'beritas.category_id', '=', 'kategori_beritas.id')
                ->leftJoin('users', 'beritas.user_id', '=', 'users.id')
                ->where('beritas.status', '=', 'Publish')
                ->Where('beritas.judul', 'like', '%' . $keyword . '%')
                ->skip(($page - 1) * $perPage)
                ->take($perPage)
                ->orderBy('beritas.id', 'desc')
                ->get();

            $count = DB::table('beritas')->where('beritas.status', '=', 'Publish')->Where('beritas.judul', 'like', '%' . $keyword . '%')->count();;
        };

        if($kategori != 'null')
        {
        $all = DB::table('beritas')
        ->selectRaw('beritas.id')
        ->selectRaw('beritas.slug')
        ->selectRaw('beritas.gambar')
        ->selectRaw('beritas.judul')
        ->selectRaw('beritas.created_at')
        ->selectRaw('beritas.konten_singkat')
        ->selectRaw('users.name')
        ->selectRaw('kategori_beritas.kategori_slug')
        ->selectRaw('kategori_beritas.name as name_kategori')
        ->leftJoin('kategori_beritas', 'beritas.category_id', '=', 'kategori_beritas.id')
        ->leftJoin('users', 'beritas.user_id', '=', 'users.id')
        ->where('beritas.status', '=', 'Publish')
        ->where('kategori_beritas.kategori_slug', '=', $kategori)
        ->Where('beritas.judul', 'like', '%' . $keyword . '%')
        ->skip(($page - 1) * $perPage)
        ->take($perPage)
        ->orderBy('beritas.id', 'desc')
        ->get();
            $count =  $all->count();
            $dataKategori = KategoriBerita::selectRaw('kategori_beritas.name')->where('kategori_slug', $kategori)->first();

        }

        return $data = ['datas' => $all, 'count' => $count, 'page' => $page, 'perPage' => $perPage, 'kategori' => $dataKategori];
    }


    /*
    |--------------------------------------------------------------------------
    | HALAMAN
    | - index
    | - show
    |--------------------------------------------------------------------------
    */

    // HALAMAN > INDEX
    public function halamanIndex()
    {
        $halamans = Halaman::orderBy('judul_halaman', 'asc')->get();

        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id', 'desc')->where('status', 'publish')->paginate();

        // data banner
        $banner_1 = Banner::whereId(1)->first();
        $banner_2 = Banner::whereId(2)->first();
        $banner_3 = Banner::whereId(3)->first();

        return view(
            'visitor.pages.halaman.index',
            compact(
                'halamans',
                'linkTerkaits',
                'banner_1',
                'banner_2',
                'banner_3',
            )
        );
    }

    // HALAMAN > SHOW
    public function halamanShow($slug)
    {
        $halaman = Halaman::where('slug', $slug)
            ->where('status', 'publish')
            ->first();

        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id', 'desc')->where('status', 'publish')->paginate();

        // data banner
        $banner_1 = Banner::whereId(1)->first();
        $banner_2 = Banner::whereId(2)->first();
        $banner_3 = Banner::whereId(3)->first();

        return view(
            'visitor.pages.halaman.show',
            compact(
                'halaman',
                'linkTerkaits',
                'banner_1',
                'banner_2',
                'banner_3',
            )
        );
    }

    // KONTAK
    public function kontak()
    {

        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id', 'desc')->where('status', 'publish')->paginate();

        // data banner
        $banner_1 = Banner::whereId(1)->first();
        $banner_2 = Banner::whereId(2)->first();
        $banner_3 = Banner::whereId(3)->first();

        return view(
            'visitor.pages.kontak',
            compact(
                'linkTerkaits',
                'banner_1',
                'banner_2',
                'banner_3',
            )
        );
    }

    // PESAN
    public function pesanStore(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama'                  => 'required',
                'email'                 => 'required|email',
                'no_telf'               => 'required|string',
                'judul_topik'           => 'required',
                'keterangan'            => 'required',
                'captcha'               => 'required|captcha'
            ],
            [
                'nama.required'         => 'Nama lengkap tidak boleh kosong',
                'email.required'        => 'Email tidak boleh kosong',
                'no_telf.required'      => 'Nomor telepon tidak boleh kosong',
                'judul_topik.required'  => 'Judul pesan tidak boleh kosong',
                'keterangan.required'   => 'Rincian pertanyaan  tidak boleh kosong',
                'captcha.required'      => 'Captcha tidak boleh kosong',
                'captcha.captcha'       => 'Kode captcha yang Anda masukan tidak sama',
            ]
        );

        if ($validator->fails()) {
            // return redirect()->back()->withInput($request->all())->withErrors($validator);
            return redirect('/kontak')->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $random = Str::random(15);
                $pengajuan = new Pesan();
                $pengajuan->nama = $request->nama;
                $pengajuan->email = $request->email;
                $pengajuan->no_telf = $request->no_telf;
                $pengajuan->judul_topik = $request->judul_topik;
                $pengajuan->keterangan = $request->keterangan;
                $pengajuan->slug = $random;

                $pengajuan->save();

                alert()->success('Terima Kasih', 'Sukses!!')->autoclose(1200);
                // return redirect()->back();
                return redirect()->route('visitor.pesan.terkirim');
            } catch (\Throwable $th) {

                Alert::toast('Oppss Ada yang salah', 'error');
                return redirect()->back();
            }
        }
    }

    public function pesanTerkirim()
    {

        return view('visitor.pesan.terkirim');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
