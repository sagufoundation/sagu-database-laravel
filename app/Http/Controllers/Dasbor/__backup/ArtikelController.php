<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use Image;
use Alert;
use Illuminate\Support\Facades\Auth;
use Storage;
use Illuminate\Support\Str;
class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Artikel::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',1)->latest()->paginate(5);
        $jumlahtrash = Artikel::onlyTrashed()->count();
        $jumlahdraft = Artikel::where('status', 0)->count();
        $datapublish = Artikel::where('status', 1)->count();


        return view('panel.admin.pages.artikel.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function draft(){

        $datas = Artikel::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',0)->latest()->paginate(5);
        $jumlahtrash = Artikel::onlyTrashed()->count();
        $jumlahdraft = Artikel::where('status', 0)->count();
        $datapublish = Artikel::where('status', 1)->count();


        return view('panel.admin.pages.artikel.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.admin.pages.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'konten' => 'required',
            'katakunci' => 'required',
            'status' => 'required',
            'kategori_id' => 'required',

        ]);

        // Auth::user()->id;
        $data = $request->all();

        $data = array(



            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'konten' => $request->konten,
             'katakunci' => $request->katakunci,
            'status' => $request->status,
               'slug' => Str::slug($request->title),
               'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
                'kategori_id' => $request->kategori_id,

           );
           $Artikel = Artikel::create($data);

           alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
           return redirect()->route('dasbor.artikel');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Artikel::findOrFail($id);
        return view('panel.admin.pages.artikel.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'konten' => 'required',
            'katakunci' => 'required',
            'status' => 'required',
            'kategori_id' => 'required',

        ]);

        // Auth::user()->id;
        $data = $request->all();

        $data = array(



            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'konten' => $request->konten,
             'katakunci' => $request->katakunci,
            'status' => $request->status,
               'slug' => Str::slug($request->title),

                'updated_by' => Auth::user()->id,
                'kategori_id' => $request->kategori_id,

           );
           $Artikel = Artikel::findOrFail($id);
           $Artikel->update($data);

           alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
           return redirect()->route('dasbor.artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = Artikel::findOrFail($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('dasbor.artikel');
    }



    public function trash()
    {
        $datas = Artikel::onlyTrashed()->paginate(5);
        $jumlahtrash = Artikel::onlyTrashed()->count();
        $jumlahdraft = Artikel::where('status', 0)->count();
        $datapublish = Artikel::where('status', 1)->count();
        return view('panel.admin.pages.artikel.trash',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function restore($id){
        $data = Artikel::onlyTrashed()->where('id',$id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('dasbor.artikel');
    }


    public function delete($id){
        $data = Artikel::onlyTrashed()->where('id',$id);
        $data->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('dasbor.artikel');
    }

}
