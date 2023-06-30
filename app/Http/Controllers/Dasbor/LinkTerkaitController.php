<?php

namespace App\Http\Controllers\Dasbor;

use App\Models\LinkTerkait;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class LinkTerkaitController extends Controller
{

    // INDEX
    public function index()
    {
        $datas = LinkTerkait::where([
            ['judul_link', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul_link', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest()->paginate(5);
        $jumlahtrash = LinkTerkait::onlyTrashed()->count();
        $jumlahdraft = LinkTerkait::where('status', 'Draft')->count();
        $datapublish = LinkTerkait::where('status', 'Publish')->count();

        return view('dasbor.link-terkait.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // DRAFT
    public function draft()
    {
        $datas = LinkTerkait::where([
            ['judul_link', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul_link', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'draft')->latest()->paginate(5);
        $jumlahtrash = LinkTerkait::onlyTrashed()->count();
        $jumlahdraft = LinkTerkait::where('status', 'Draft')->count();
        $datapublish = LinkTerkait::where('status', 'Publish')->count();

        return view('dasbor.link-terkait.index', compact(
            'datas',
            'jumlahtrash',
            'jumlahdraft',
            'datapublish'
        ))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {

        return view('dasbor.link-terkait.create');
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul_link'            => 'required',
                'url'                   => 'required|url',
                // 'gambar'              => 'image|mimes:png,jpeg,jpg|max:4096',
                // 'status'                    => 'required',
            ],
            [
                'judul_link.required'   => 'Judul link tidak boleh kosong',
                'url.required'          => 'URL tidak boleh kosong',
                // 'status.required'           => 'Status tidak boleh kosong',
                // 'gambar.required'     => 'Gambar harus dengan jenis PNG,JPG,JPEG',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $LinkTerkait = new LinkTerkait();
                $LinkTerkait->judul_link = $request->judul_link;
                $LinkTerkait->url = $request->url;
                $LinkTerkait->author = Auth::user()->id;
                $LinkTerkait->status = $request->status;
                $LinkTerkait->slug = Str::slug($request->judul_link).time();

                if ($request->gambar) {
                    $imageName = $LinkTerkait->slug . '.' . $request->gambar->extension();
                    $path = public_path('gambar/link-terkait');
                    if (!empty($LinkTerkait->gambar) && file_exists($path . '/' . $LinkTerkait->gambar)) :
                        unlink($path . '/' . $LinkTerkait->gambar);
                    endif;
                    $LinkTerkait->gambar = $imageName;
                    $request->gambar->move(public_path('gambar/link-terkait'), $imageName);
                }
                $LinkTerkait->save();
                Alert::toast('LinkTerkait Berhasil dibuat!', 'success');
                return redirect()->route('dasbor.link-terkait');
            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($slug)
    {
        $data = LinkTerkait::where('slug', $slug)->first();
        return view('dasbor.link-terkait.show', compact('data'));
    }

    // EDIT
    public function edit($slug)
    {
        $data = LinkTerkait::where('slug', $slug)->first();
        return view('dasbor.link-terkait.edit', compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul_link'                => 'required',
                'url'                       => 'required',
                // 'konten'                    => 'required',
                'gambar'                    => 'mimes:png,jpeg,jpg|max:4096',
                // 'status'                    => 'required',
            ],
            [
                'judul_link.required'       => 'judul_link LinkTerkait tidak boleh kosong',
                'url.required'              => 'URL tidak boleh kosong',
                // 'konten.required'           => 'Konten LinkTerkait tidak boleh kosong',
                // 'status.required'           => 'Status tidak boleh kosong',

                'gambar.mimes'               => 'Gambar harus dengan jenis PNG,JPG,JPEG',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $LinkTerkait = LinkTerkait::find($id);
                $LinkTerkait->judul_link = $request->judul_link;
                $LinkTerkait->author = Auth::user()->id;
                $LinkTerkait->url = $request->url;
                $LinkTerkait->status = $request->status;
                $LinkTerkait->slug = Str::slug($request->judul_link).time();

                if ($request->gambar) {
                    $imageName = $LinkTerkait->slug . '.' . $request->gambar->extension();
                    $path = public_path('gambar/link-terkait');
                    if (!empty($LinkTerkait->gambar) && file_exists($path . '/' . $LinkTerkait->gambar)) :
                        unlink($path . '/' . $LinkTerkait->gambar);
                    endif;
                    $LinkTerkait->gambar = $imageName;
                    $request->gambar->move(public_path('gambar/link-terkait'), $imageName);
                }
                $LinkTerkait->update();
                Alert::toast('LinkTerkait Berhasil diperbarui!', 'success');
                return redirect()->route('dasbor.link-terkait');
            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // DESTROY
    public function destroy($id)
    {
        $data = LinkTerkait::find($id);
        if ($data->delete()) {
            //return success with Api Resource
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();
        }
    }

    // TRASH
    public function trash()
    {
        $datas = LinkTerkait::onlyTrashed()->paginate(5);
        $jumlahtrash = LinkTerkait::onlyTrashed()->count();
        $jumlahdraft = LinkTerkait::where('status', 'Draf')->count();
        $datapublish = LinkTerkait::where('status', 'Publish')->count();
        return view('dasbor.link-terkait.trash', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // RESTORE
    public function restore($id)
    {
        $data = LinkTerkait::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('dasbor.link-terkait');
    }

    // DELETE
    public function delete($id)
    {
        $data = LinkTerkait::onlyTrashed()->findOrFail($id);
        //dd($data);
        if ($data->image) {
            File::delete($data->image);
        }
        $data->forceDelete();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
        return to_route('dasbor.link-terkait.trash');
    }
}
