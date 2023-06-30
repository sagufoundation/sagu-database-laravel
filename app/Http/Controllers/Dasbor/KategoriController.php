<?php

namespace App\Http\Controllers\Dasbor;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita\KategoriBerita;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{

    // INDEX
    public function index(Request $request)
    {
        $datas = KategoriBerita::where([

            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest()->paginate(5);

        $jumlahtrash = KategoriBerita::onlyTrashed()->count();
        $jumlahdraft = KategoriBerita::where('status', 'Draft')->count();
        $datapublish = KategoriBerita::where('status', 'Publish')->count();

        return view('dasbor.author.kategori.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    // DRAFT
    public function draft(Request $request)
    {
        $datas = KategoriBerita::where([

            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->paginate(5);
        // $datas = kategori::where('status',1)->latest()->paginate(5);

        $jumlahtrash = KategoriBerita::onlyTrashed()->count();
        $jumlahdraft = KategoriBerita::where('status', 'Draft')->count();
        $datapublish = KategoriBerita::where('status', 'Publish')->count();
        return view('dasbor.author.kategori.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {
        return view('dasbor.author.kategori.create');
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'      => 'required',
                // 'deskripsi' => 'required|max:255',
            ],
            [
                'name.required' => 'Judul Kategori tidak boleh kosong!',
                // 'deskripsi.required' => 'Deskripsi Kategori tidak boleh kosong!',
                // 'deskripsi.max' => 'Deskripsi Kategori maximal 255 karekter!',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $kategori = new KategoriBerita();
                $kategori->author = Auth::user()->id;
                $kategori->name = $request->name;
                $kategori->deskripsi = $request->deskripsi;
                $kategori->kategori_slug = Str::slug($kategori->name);
                $kategori->status = $request->status;

                $kategori->save();
                Alert::toast('Kategori Berhasil dibuat!', 'success');
                return redirect('dasbor/berita/kategori/' .$kategori->kategori_slug. '/detail');

            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($slug)
    {
        $data = KategoriBerita::where('kategori_slug', $slug)->first();
        return view('dasbor.author.kategori.show', compact('data'));
    }

    // EDIT
    public function edit($id)
    {
        $data = KategoriBerita::where('kategori_slug', $id)->first();
        return view('dasbor.author.kategori.edit', compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                // 'deskripsi' => 'required|max:255',
            ],
            [
                'name.required' => 'Judul Kategori tidak boleh kosong!',
                // 'deskripsi.required' => 'Deskripsi Kategori tidak boleh kosong!',
                // 'deskripsi.max' => 'Deskripsi Kategori maximal 255 karekter!',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $kategori = KategoriBerita::find($id);
                $kategori->author = Auth::user()->id;
                $kategori->name = $request->name;
                $kategori->deskripsi = $request->deskripsi;
                $kategori->status = $request->status;
                $kategori->kategori_slug = Str::slug($kategori->name);

                $kategori->update();

                Alert::toast('Kategori Berhasil diperbarui!', 'success');
                // return redirect()->route('dasbor.kategori');
                return redirect('dasbor/berita/kategori/' .$kategori->kategori_slug. '/detail');

            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // TRASH
    public function trash()
    {
        $datas = KategoriBerita::onlyTrashed()->paginate(10);
        return view('dasbor.author.kategori.trash', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // DESTROY
    public function destroy($id)
    {
        $data = KategoriBerita::findOrFail($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }

    // RESTORE
    public function restore($id)
    {
        $data = KategoriBerita::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }

    // DELETE
    public function delete($id)
    {
        $data = KategoriBerita::onlyTrashed()->where('id', $id);
        $data->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }
}
