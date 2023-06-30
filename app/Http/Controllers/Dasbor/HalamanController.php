<?php

namespace App\Http\Controllers\Dasbor;

use App\Models\Halaman;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class HalamanController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = Halaman::where([
            ['judul_halaman', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul_halaman', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Publish')->latest()->paginate(5);

        $jumlahtrash    = Halaman::onlyTrashed()->count();

        $jumlahdraft    = Halaman::where('status', 'Draft')->count();
        $datapublish    = Halaman::where('status', 'Publish')->count();

        return view('dasbor.halaman.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // DRAFT
    public function draft()
    {
        $datas = Halaman::where([
            ['judul_halaman', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul_halaman', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Draft')->latest()->paginate(5);

        $jumlahtrash    = Halaman::onlyTrashed()->count();

        $jumlahdraft    = Halaman::where('status', 'Draft')->count();
        $datapublish    = Halaman::where('status', 'Publish')->count();

        return view('dasbor.halaman.index',compact(
            'datas',
            'jumlahtrash',
            'jumlahdraft',
            'datapublish'
        )) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {
        return view('dasbor.halaman.create');
    }

    // STORE
    public function store(Request $request)
    {
        $validator      = Validator::make(
            $request->all(),
            [
                'judul_halaman'             => 'required',
                'konten'                    => 'required',
                // 'gambar'                 => 'image|mimes:png,jpeg,jpg|max:4096',
                'status'                    => 'required',
            ],[
                'judul_halaman.required'    => 'Judul tidak boleh kosong',
                'konten.required'           => 'Konten tidak boleh kosong',
                // 'gambar.required'        => 'Gambar harus dengan jenis PNG,JPG,JPEG',
                'status.required'           => 'Status tidak boleh kosong',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
               $halaman = new Halaman();

               $halaman->judul_halaman      = $request->judul_halaman;
               $halaman->sub_judul          = $request->sub_judul;
               $halaman->konten             = $request->konten;
               $halaman->status             = $request->status;

               $halaman->slug = Str::slug($request->judul_halaman);

               if ($request->gambar) {
                    $imageName = $halaman->slug . '.' . $request->gambar->extension();
                    $path = 'gambar/halaman/';

                    if (!empty($halaman->gambar) && file_exists($path, $halaman->gambar)) :
                        unlink($path, $halaman->gambar);
                    endif;

                    $halaman->gambar = $path . $imageName;
                    $request->gambar->move($path, $imageName);
               }

               $halaman->save();

               Alert::toast('Halaman Berhasil dibuat!', 'success');

               return redirect()->route('dasbor.halaman');

            } catch (\Throwable $th) {

                Alert::toast('Gagal', 'error');

                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($slug)
    {
        $data = Halaman::where('slug',$slug)->first();
        return view('dasbor.halaman.show',compact('data'));
    }

    // EDIT
    public function edit($slug)
    {
        $data = Halaman::where('slug',$slug)->first();
        return view('dasbor.halaman.edit',compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul_halaman'             => 'required',
                'konten'                    => 'required',
                // 'gambar'                    => 'image|mimes:png,jpeg,jpg|max:4096',
                'status'                    => 'required',
            ],[
                'judul_halaman.required'    => 'judul_halaman halaman tidak boleh kosong',
                'konten.required'           => 'Konten halaman tidak boleh kosong',
                // 'gambar.required'           => 'Gambar harus dengan jenis PNG,JPG,JPEG',
                'status.required'           => 'Status tidak boleh kosong',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $halaman = Halaman::find($id);

                $halaman->judul_halaman     = $request->judul_halaman;
                $halaman->sub_judul         = $request->sub_judul;
                $halaman->konten            = $request->konten;
                $halaman->status            = $request->status;

                $halaman->slug              = Str::slug($request->judul_halaman);

                if ($request->gambar) {
                    $imageName = $halaman->slug . '.' . $request->gambar->extension();
                    $path = 'gambar/halaman/';
                    if (!empty($halaman->gambar) && file_exists($path, $halaman->gambar)) :
                        unlink($path, $halaman->gambar);
                    endif;
                    $halaman->gambar = $path . $imageName;
                    $request->gambar->move($path, $imageName);
                }

                $halaman->update();

                Alert::toast('Halaman Berhasil diperbarui!', 'success');
                return redirect()->route('dasbor.halaman');
            } catch (\Throwable $th) {

                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // DESTROY
    public function destroy($id)
    {
        $data = Halaman::find($id);

        if($data->delete()) {
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();
        }
    }

    // TRASH
    public function trash()
    {
        $datas          = Halaman::onlyTrashed()->paginate(5);

        $jumlahtrash    = Halaman::onlyTrashed()->count();
        $jumlahdraft    = Halaman::where('status', 'draf')->count();
        $datapublish    = Halaman::where('status', 'publish')->count();

        return view('dasbor.halaman.trash',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // RESTORE
    public function restore($id){
        $data = Halaman::onlyTrashed()->where('id',$id);

        $data->restore();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);

        return redirect()->route('dasbor.halaman');
    }

    // DELETE
    public function delete($id)
    {
        $data           = Halaman::onlyTrashed()->findOrFail($id);

        if($data->gambar){
            File::delete($data->gambar);
        }

        $data->forceDelete();

        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);

        return to_route('dasbor.halaman.trash');

    }

}
