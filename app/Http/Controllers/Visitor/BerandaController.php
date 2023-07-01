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
    
    public function index()
    {

        return redirect('login');
    }

}
