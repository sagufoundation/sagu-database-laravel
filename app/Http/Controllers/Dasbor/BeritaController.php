<?php

namespace App\Http\Controllers\Dasbor;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Berita\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita\KategoriBerita;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    // INDEX
    public function index(Request $request)
    {
        $datas = Berita::where([

            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subjudul', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->orWhere('status', 'Verifikasi')->orderBy('id', 'desc')->paginate(5);

        $jumlahtrash = Berita::onlyTrashed()->count();
        $jumlahrevisi = Berita::where('status', 'Revisi')->count();
        $jumlahdraft = Berita::where('status', 'Draft')->count();
        $datapublish = Berita::where('status', 'Publish')->count();

        return view('dasbor.author.berita.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish', 'jumlahrevisi'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // DRAFT
    public function draft()
    {

        $datas = Berita::where([
            ['judul', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subjudul', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->orWhere('status', 'Revisi')->orderBy('id', 'desc')->paginate(5);
        $jumlahtrash = Berita::onlyTrashed()->count();
        $jumlahrevisi = Berita::where('status', 'Revisi')->count();
        $jumlahdraft = Berita::where('status', 'Draft')->count();
        $datapublish = Berita::where('status', 'Publish')->count();

        return view('dasbor.author.berita.index', compact(
            'datas',
            'jumlahtrash',
            'jumlahdraft',
            'datapublish',
            'jumlahrevisi'
        ))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // REVISI
    public function revisi()
    {

        $datas = Berita::where([
            ['judul', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subjudul', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Revisi')->latest()->paginate(5);
        $jumlahtrash = Berita::onlyTrashed()->count();
        $jumlahrevisi = Berita::where('status', 'Revisi')->count();
        $jumlahdraft = Berita::where('status', 'Draft')->count();
        $datapublish = Berita::where('status', 'Publish')->count();

        return view('dasbor.author.berita.revisi', compact(
            'datas',
            'jumlahtrash',
            'jumlahdraft',
            'datapublish',
            'jumlahrevisi'
        ))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // REVISI
    public function verifikasi()
    {

        $datas = Berita::where([
            ['judul', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subjudul', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Verifikasi')->latest()->paginate(5);
        $jumlahtrash = Berita::onlyTrashed()->count();
        $jumlahrevisi = Berita::where('status', 'Revisi')->count();
        $jumlahdraft = Berita::where('status', 'Draft')->count();
        $datapublish = Berita::where('status', 'Publish')->count();

        return view('dasbor.author.berita.verifikasi', compact(
            'datas',
            'jumlahtrash',
            'jumlahdraft',
            'datapublish',
            'jumlahrevisi'
        ))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // TRASH
    public function trash()
    {
        $datas = Berita::onlyTrashed()->paginate(10);
        return view('dasbor.author.berita.trash', compact('datas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {
        // $kategoris = KategoriBerita::pluck('name','id');
        $kategoris = KategoriBerita::where('status', 'Publish')->get();
        return view('dasbor.author.berita.create', compact('kategoris'));
    }

    // SHOW
    public function show($slug)
    {
        $data = Berita::where('slug', $slug)->first();
        return view('dasbor.author.berita.show', compact('data'));
    }

    // EDIT
    public function edit($slug)
    {
        $kategoris = KategoriBerita::where('status', 'Publish')->get();
        $data = Berita::where('slug', $slug)->first();
        return view('dasbor.author.berita.edit', compact('kategoris', 'data'));
    }

    //  Delete
    public function destroy($id)
    {
        $data = Berita::findOrFail($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }

    public function restore($id)
    {
        $data = Berita::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            $data = Berita::onlyTrashed()->findOrFail($id);
            $path = public_path('gambar/berita/' . $data->gambar);

            if (file_exists($path)) {
                File::delete($path);
            }
            $data->forceDelete();
            Alert::toast('Berita Berhasil dihapus!', 'success');
            return redirect()->back();
        } catch (\Throwable $e) {
            dd($e);
            Alert::toast('Gagal', ['error' => $e->getMessage()], 'error');
            return redirect()->back();
        }
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul'                     => 'required|max:255',
                // 'konten'                    => 'required',
                // 'konten_singkat'            => 'required|max:255',
                // 'gambar'                    => 'required|image|mimes:jpeg,png,jpg|max:2097',
                // 'category_id'               => 'required|integer',
                // 'status'                    => 'required',
            ],
            [
                'judul.required'            => 'Judul tidak boleh kosong',
                // 'judul.max'                 => 'Judul maximal 255 Karakter',
                // 'category_id.required'      => 'Kategori berita tidak boleh kosong',
                // 'konten.required'           => 'Konten tidak boleh kosong',
                // 'konten_singkat.max'        => 'Keterangan singkat maximal 255 Karakter',
                // 'konten_singkat.required'   => 'Keterangan singkat tidak boleh kosong',
                // 'gambar.required'           => 'Gambar tidak boleh kosong',
                // 'gambar.mimes'              => 'Gambar harus dengan format PNG,JPG,JPEG',
                // 'gambar.max'                => 'Gambar ukuran maksimal 2MB',
                // 'status.required'           => 'Status tidak boleh kosong',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {

                $data                       = new Berita();
                $data->judul                = $request->judul;
                $data->slug                 = Str::slug($data->judul);

                $data->konten               = $request->konten;
                $data->konten_singkat       = $request->konten_singkat;

                $data->category_id          = $request->category_id;
                $data->status               = 'Draft';
                // $data->status               = $request->status;
                $data->user_id              = Auth::user()->id;

                if (isset($request->gambar)) {

                    $posterName = $data->slug . Str::random(10) . '.' . $request->gambar->extension();
                    $path = public_path('gambar/berita');
                    if (!empty($data->gambar) && file_exists($path . '/' . $data->gambar)) :
                        unlink($path . '/' . $data->gambar);
                    endif;

                    $data->gambar = $posterName;

                    $request->gambar->move(public_path('gambar/berita'), $posterName);
                }


                $data->save();

                Alert::toast('Berita Berhasil dibuat!', 'success');
                return redirect('dasbor/berita/' . $data->slug . '/detail');

                // if ($data->status == 'Publish') {
                //     return redirect()->route('dasbor.berita');
                // }
                // else {
                //     return redirect()->route('dasbor.berita.draft');
                // }

            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul'                     => 'required|max:255',
                // 'konten'                    => 'required',
                // 'konten_singkat'            => 'required|max:255',
                // 'gambar'                    => 'required',
                // 'gambar'                    => 'image|mimes:jpeg,png,jpg|max:2097',
                'category_id'               => 'required|integer',
                // 'status'                    => 'required',

            ],
            [
                'judul.required'                => 'Bagian ini tidak boleh kosong',
                // 'judul.max'                 => 'Judul maximal 255 Karakter',
                'category_id.integer'           => 'Bagian ini tidak boleh kosong',
                // 'konten.required'           => 'Konten tidak boleh kosong',
                // 'konten_singkat.max'        => 'Keterangan singkat maximal 255 Karakter',
                // 'konten_singkat.required'   => 'Keterangan singkat tidak boleh kosong',
                // 'gambar.required'           => 'Gambar tidak boleh kosong',
                // 'gambar.mimes'              => 'Gambar harus dengan format PNG,JPG,JPEG',
                // 'gambar.max'                => 'Gambar ukuran maksimal 2MB',
                // 'status.required'           => 'Status tidak boleh kosong',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data                       = Berita::find($id);
                $data->judul                = $request->judul;
                $data->slug                 = Str::slug($data->judul);

                $data->konten               = $request->konten;
                $data->konten_singkat       = $request->konten_singkat;

                $data->category_id          = $request->category_id;
                $data->status               = $request->status;

                $data->ket_verfikasi        = $request->ket_verfikasi;
                $data->ket_revisi           = $request->ket_revisi;
                $data->user_id              = Auth::user()->id;

                if (isset($request->gambar)) {

                    $posterName = $data->slug . Str::random(10) . '.' . $request->gambar->extension();
                    $path = public_path('gambar/berita');
                    if (!empty($data->gambar) && file_exists($path . '/' . $data->gambar)) :
                        unlink($path . '/' . $data->gambar);
                    endif;

                    $data->gambar = $posterName;

                    $request->gambar->move(public_path('gambar/berita'), $posterName);
                }

                // if ($request->gambar) {
                //     $posterName = Str::random(10) . '.' . $request->gambar->extension();
                //     $path = public_path('gambar/berita');
                //     if (!empty($data->gambar) && file_exists($path . '/' . $data->gambar)) :
                //         unlink($path . '/' . $data->gambar);
                //     endif;
                //     $data->gambar = $posterName;
                //     $request->gambar->move(public_path('gambar/berita'), $posterName);
                // }

                $data->update();

                Alert::toast('Berita Berhasil diperbarui!', 'success');
                return redirect('dasbor/berita/' . $data->slug . '/detail');

                // if ($data->status == 'Publish') {
                //     return redirect()->route('dasbor.berita');

                // } else if($data->status == 'Verifikasi') {
                //     return redirect()->route('dasbor.berita.verifikasi');

                // } else if($data->status == 'Revisi') {
                //     return redirect()->route('dasbor.berita.revisi');
                // }
                // else {
                //     return redirect()->route('dasbor.berita.draft');
                // }
            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }
}
