<?php

namespace App\Http\Controllers\Dasbor;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InformasiLingkungan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class InformasiLingkunganController extends Controller
{

    // INDEX
    public function index()
    {
        $datas = InformasiLingkungan::where([
            ['judul', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        ->orWhere('url', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest()->paginate(5);

        $jumlahtrash = InformasiLingkungan::onlyTrashed()->count();

        $jumlahdraft = InformasiLingkungan::where('status', 'Draft')->count();
        $datapublish = InformasiLingkungan::where('status', 'Publish')->count();

        return view('dasbor.informasi-lingkungan.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // DRAFT
    public function draft()
    {
        $datas = InformasiLingkungan::where([
            ['judul', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        ->orWhere('url', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->latest()->paginate(5);

        $jumlahtrash = InformasiLingkungan::onlyTrashed()->count();

        $jumlahdraft = InformasiLingkungan::where('status', 'Draft')->count();
        $datapublish = InformasiLingkungan::where('status', 'Publish')->count();

        return view('dasbor.informasi-lingkungan.index', compact(
            'datas',
            'jumlahtrash',
            'jumlahdraft',
            'datapublish'
        ))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // TRASH
    public function trash()
    {
        $datas = InformasiLingkungan::onlyTrashed()->paginate(5);

        $jumlahtrash = InformasiLingkungan::onlyTrashed()->count();
        $jumlahdraft = InformasiLingkungan::where('status', 'Draf')->count();
        $datapublish = InformasiLingkungan::where('status', 'Publish')->count();

        return view('dasbor.informasi-lingkungan.trash', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {
        return view('dasbor.informasi-lingkungan.create');
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul'                     => 'required',
                'keterangan_singkat'        => 'required',
                'keterangan_lengkap'        => 'required|string|max:255',
                'url'                       => 'required',
                'status'                    => 'required',
                'slug'                      => 'unique:informasi_lingkungans,slug',
                'gambar'                    => 'required|image|mimes:jpeg,png,jpg|max:2024',
            ],
            [
                'slug.unique'                   => 'Data sudah ada!',

                'judul.required'                => 'Judul  tidak boleh kosong',
                'keterangan_singkat.required'   => 'Keterangan Singkat tidak boleh kosong',
                'keterangan_lengkap.required'   => 'Keterangan Lengkap tidak boleh kosong',
                'keterangan_lengkap.max'   => 'Keterangan Lengkap tidak boleh lebih dari 255 karakter.',
                'gambar.required'               => 'Gambar tidak boleh kosong',
                'gambar.mimes'                  => 'Gambar harus dengan jenis PNG,JPG,JPEG',
                'status.required'               => 'Status tidak boleh kosong',
                'url.required'                  => 'Tautan / URL tidak boleh kosong',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $linkunganinfo = new InformasiLingkungan();
                $linkunganinfo->judul = $request->judul;
                $linkunganinfo->keterangan_singkat = $request->keterangan_singkat;
                $linkunganinfo->keterangan_lengkap = $request->keterangan_lengkap;
                $linkunganinfo->status = $request->status;
                $linkunganinfo->url = $request->url;
                $linkunganinfo->author = Auth::user()->id;
                $linkunganinfo->slug = Str::slug($request->judul).'-'.time();

                if ($request->gambar) {
                    $imageName = Str::random(8) . '.' . $request->gambar->extension();
                    $path = 'gambar/informasi-lingkungan/';

                    if (!empty($linkunganinfo->gambar) && file_exists($path, $linkunganinfo->gambar)) :
                        unlink($path, $linkunganinfo->gambar);
                    endif;
                    $linkunganinfo->gambar = $path . $imageName;
                    $request->gambar->move($path, $imageName);
                }
                $linkunganinfo->save();
                Alert::toast('Linkungan Hidup Berhasil dibuat!', 'success');
                if ($linkunganinfo->status == 'Publish') {
                    return redirect()->route('dasbor.informasilingkungan');
                } else {
                    return redirect()->route('dasbor.informasilingkungan.draft');
                }
            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($slug)
    {
        $data = InformasiLingkungan::where('slug', $slug)->first();
        return view('dasbor.informasi-lingkungan.show', compact('data'));
    }

    // EDIT
    public function edit($slug)
    {
        $data = InformasiLingkungan::where('slug', $slug)->first();
        return view('dasbor.informasi-lingkungan.edit', compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul'                     => 'required',
                // 'keterangan_singkat'        => 'required',
                // 'keterangan_lengkap'        => 'required|string|max:255',
                // 'url'                       => 'required',
                // 'status'                    => 'required',
                // 'gambar'                    => 'image|mimes:jpeg,png,jpg',
                'slug'                      => 'unique:informasi_lingkungans,slug',
            ],
            [
                'judul.required'                => 'Judul  tidak boleh kosong',
                'slug.unique'                   => 'Data sudah ada!',
                // 'keterangan_singkat.required'   => 'Keterangan Singkat tidak boleh kosong',
                // 'keterangan_lengkap.required'   => 'Keterangan Lengkap tidak boleh kosong',
                // 'gambar.required'               => 'Gambar tidak boleh kosong',
                // 'gambar.mimes'                  => 'Gambar harus dengan jenis PNG,JPG,JPEG',
                // 'status.required'               => 'Status tidak boleh kosong',
                // 'url.required'                  => 'Tautan / URL tidak boleh kosong',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $linkunganinfo = InformasiLingkungan::find($id);
                $linkunganinfo->judul = $request->judul;
                $linkunganinfo->keterangan_singkat = $request->keterangan_singkat;
                $linkunganinfo->keterangan_lengkap = $request->keterangan_lengkap;
                $linkunganinfo->status = $request->status;
                $linkunganinfo->url = $request->url;
                $linkunganinfo->author = Auth::user()->id;
                $linkunganinfo->slug = Str::slug($request->judul).'-'.time();

                if ($request->gambar) {
                    $imageName =  Str::random(8) . '.' . $request->gambar->extension();
                    $path = 'gambar/informasi-lingkungan/';
                    if (!empty($linkunganinfo->gambar) && file_exists($path, $linkunganinfo->gambar)) :
                        unlink($path, $linkunganinfo->gambar);
                    endif;
                    $linkunganinfo->gambar = $path . $imageName;
                    $request->gambar->move($path, $imageName);
                }

                $linkunganinfo->update();
                Alert::toast('Informasi Lingkungan Berhasil diperbarui!', 'success');
                if ($linkunganinfo->status == 'Publish') {
                    return redirect()->route('dasbor.informasilingkungan');
                } else {
                    return redirect()->route('dasbor.informasilingkungan.draft');
                }

            } catch (\Throwable $th) {

                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // RESTORE
    public function restore($id)
    {
        $data = InformasiLingkungan::onlyTrashed()->where('id', $id);

        $data->restore();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);

        return redirect()->route('dasbor.informasilingkungan');
    }

    // DESTROY
    public function destroy($id)
    {
        $data = InformasiLingkungan::find($id);

        if ($data->delete()) {
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();
        }
    }

    // DELETE
    public function delete($id)
    {
        $data = InformasiLingkungan::onlyTrashed()->findOrFail($id);

        if ($data->gambar) {
            File::delete($data->gambar);
        }

        $data->forceDelete();

        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);

        return to_route('dasbor.informasilingkungan.trash');
    }
}
