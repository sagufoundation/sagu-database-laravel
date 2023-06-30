<?php

namespace App\Http\Controllers\Dasbor;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\LayananOnline;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class LayananOnlineController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = LayananOnline::where([
            ['judul', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        ->orWhere('url', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Publish')->latest()->paginate(5);

        $jumlahtrash = LayananOnline::onlyTrashed()->count();

        $jumlahdraft = LayananOnline::where('status', 'Draft')->count();
        $datapublish = LayananOnline::where('status', 'Publish')->count();

        return view('dasbor.layanan-online.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // DRAFT
    public function draft()
    {
        $datas = LayananOnline::where([
            ['judul', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        ->orWhere('url', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Draft')->latest()->paginate(5);

        $jumlahtrash = LayananOnline::onlyTrashed()->count();

        $jumlahdraft = LayananOnline::where('status', 'Draft')->count();
        $datapublish = LayananOnline::where('status', 'Publish')->count();

        return view('dasbor.layanan-online.index',compact(
            'datas',
            'jumlahtrash',
            'jumlahdraft',
            'datapublish'
        )) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // TRASH
    public function trash()
    {
        $datas = LayananOnline::onlyTrashed()->paginate(5);

        $jumlahtrash = LayananOnline::onlyTrashed()->count();
        $jumlahdraft = LayananOnline::where('status', 'Draf')->count();
        $datapublish = LayananOnline::where('status', 'Publish')->count();

        return view('dasbor.layanan-online.trash',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {
        return view('dasbor.layanan-online.create');
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul'                         => 'required',
                'keterangan_singkat'            => 'required',
                'keterangan_lengkap'            => 'required',
                'url'                           => 'required',
                'status'                        => 'required',
                'gambar'                        => 'image|mimes:jpeg,png,jpg',
            ],
            [
                'judul.required'                => 'Judul  tidak boleh kosong',
                'keterangan_singkat.required'   => 'Keterangan singkat tidak boleh kosong',
                'lengkap.required'              => 'Keterangan lengkap tidak boleh kosong',
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
               $linkunganinfo = new LayananOnline();
               $linkunganinfo->judul = $request->judul;
               $linkunganinfo->keterangan_singkat = $request->keterangan_singkat;
               $linkunganinfo->keterangan_lengkap = $request->keterangan_lengkap;
               $linkunganinfo->status = $request->status;
               $linkunganinfo->url = $request->url;

                if($request->gambar){
                    $imageName = Str::random(8) . '.' . $request->gambar->extension();
                    $path = 'gambar/layanan-online/';

                    if (!empty($linkunganinfo->gambar) && file_exists($path, $linkunganinfo->gambar)) :
                        unlink($path, $linkunganinfo->gambar);
                    endif;
                    $linkunganinfo->gambar = $path . $imageName;
                    $request->gambar->move($path, $imageName);
                }
               $linkunganinfo->save();
               Alert::toast('Layanan Online Berhasil dibuat!', 'success');
               return redirect()->route('dasbor.layananonline');

            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($id)
    {
        $data = LayananOnline::where('id',$id)->first();
        return view('dasbor.layanan-online.show',compact('data'));
    }

    // EDIT
    public function edit($id)
    {
        $data = LayananOnline::where('id',$id)->first();
        return view('dasbor.layanan-online.edit',compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul'                         => 'required',
                'keterangan_singkat'            => 'required',
                'keterangan_lengkap'            => 'required',
                'url'                           => 'required',
                'status'                        => 'required',
                'gambar'                        => 'image|mimes:jpeg,png,jpg',
            ],
            [
                'judul.required'                => 'Judul  tidak boleh kosong',
                'keterangan_singkat.required'   => 'Keterangan singkat tidak boleh kosong',
                'lengkap.required'              => 'Keterangan lengkap tidak boleh kosong',
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
                $linkunganinfo = LayananOnline::find($id);
                $linkunganinfo->judul = $request->judul;
                $linkunganinfo->keterangan_singkat = $request->keterangan_singkat;
                $linkunganinfo->keterangan_lengkap = $request->keterangan_lengkap;
                $linkunganinfo->status = $request->status;
                $linkunganinfo->url = $request->url;


                if ($request->gambar) {
                    $imageName =  Str::random(8) . '.' . $request->gambar->extension();
                    $path = 'gambar/layanan-online/';
                    if (!empty($linkunganinfo->gambar) && file_exists($path, $linkunganinfo->gambar)) :
                        unlink($path, $linkunganinfo->gambar);
                    endif;
                    $linkunganinfo->gambar = $path . $imageName;
                    $request->gambar->move($path, $imageName);
                }

                $linkunganinfo->update();

                Alert::toast('Layanan Online Berhasil diperbarui!', 'success');
                return redirect()->route('dasbor.layananonline');
            } catch (\Throwable $th) {

                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // RESTORE
    public function restore($id){
        $data = LayananOnline::onlyTrashed()->where('id',$id);

        $data->restore();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);

        return redirect()->route('dasbor.layananonline');
    }

    // DESTROY
    public function destroy($id)
    {
        $data = LayananOnline::find($id);

        if($data->delete()) {
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();
        }
    }

    // DELETE
    public function delete($id)
    {
        $data = LayananOnline::onlyTrashed()->findOrFail($id);

        if($data->gambar){
            File::delete($data->gambar);
        }

        $data->forceDelete();

        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);

        return to_route('dasbor.layananonline.trash');

    }
    
}
