<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Album;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index($id)
    {$data = Album::findOrFail($id);
        $gambars = Foto::where([
            ['keterangan', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('keterangan', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('album_id', $id)->latest()->paginate(5);
        $cover = Foto::where('status',1)->count();
        return view('panel.admin.pages.foto.index', compact('data','gambars','cover'))->with('i', (request()->input('page', 1) - 1) * 5);
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

        $tahun = date("Y");
        $bulan = date("M");

        $request->validate([
            'keterangan' => 'required',
             'album_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        //upload image
        $filename  = 'nokensoft'.'-'.date('Y-m-d-H-i-s').$request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/resource/foto/'.$tahun.'/'.$bulan,$filename);

           $url = ('storage/resource/foto/'.$tahun.'/'.$bulan.'/'.$filename);


        //create slider
        $gambar = Foto::create([
            'image'=> $url,
            'keterangan' => $request->keterangan,
             'album_id' => $request->album_id,
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
        $data = Foto::findOrFail($id);


        $utama = Foto::where('album_id', $data->album_id)
        ->where('status', 1)->first();



        $data = $request->all();

        $data = array(




            'status' => 1,


           );
           $Gambar = Foto::findOrFail($id);
           $Gambar->update($data);


if(!empty($utama)){


           $ubahprimary = array(




            'status' => 0,


           );



           $Primary = Foto::where('id', $utama->id)
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
        $data = Foto::findOrFail($id);

        //dd($data);
        if($data->image){
            File::delete($data->image);
        }
        $data->forceDelete();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }
}
