<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\GambarArtikel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GambarArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    public function index($id)
    {
        $data = Artikel::findOrFail($id);
        $gambars = GambarArtikel::where([
            ['keterangan', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('keterangan', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('artikel_id', $id)->latest()->paginate(5);
        $cover = GambarArtikel::where('status',1)->count();
        return view('panel.admin.pages.gambar-artikel.index', compact('data','gambars','cover'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


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
            'keterangan' => 'required',
             'artikel_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/resource/artikel', $image->hashName());

        //create slider
        $gambar = GambarArtikel::create([
            'image'=> $image->hashName(),
            'keterangan' => $request->keterangan,
             'artikel_id' => $request->artikel_id,
            'status' => 0,

        ]);

        if ($gambar) {
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        }


        return redirect()->back();
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
        //
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
        //
        $data = GambarArtikel::findOrFail($id);


        $utama = GambarArtikel::where('artikel_id', $data->artikel_id)
        ->where('status', 1)->first();



        $data = $request->all();

        $data = array(




            'status' => 1,


           );
           $Gambar = GambarArtikel::findOrFail($id);
           $Gambar->update($data);


if(!empty($utama)){


           $ubahprimary = array(




            'status' => 0,


           );



           $Primary = GambarArtikel::where('id', $utama->id)
              ->update($ubahprimary);
        }
              alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
              return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = GambarArtikel::findOrFail($id);

        //dd($data);
        if($data->image){
            Storage::delete('public/resource/artikel/'.$data->image);
        }

        $data->forceDelete();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }
}
