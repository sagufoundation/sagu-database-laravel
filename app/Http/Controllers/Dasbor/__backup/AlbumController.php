<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;
use Image;
use Alert;
use Illuminate\Support\Facades\Auth;
use Storage;
use Illuminate\Support\Str;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Album::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',1)->latest()->paginate(5);
        $jumlahtrash = Album::onlyTrashed()->count();
        $jumlahdraft = Album::where('status', 0)->count();
        $datapublish = Album::where('status', 1)->count();


        return view('panel.admin.pages.album.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);


    }




    public function draft()
    {
        $datas = Album::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',0)->latest()->paginate(5);
        $jumlahtrash = Album::onlyTrashed()->count();
        $jumlahdraft = Album::where('status', 0)->count();
        $datapublish = Album::where('status', 1)->count();


        return view('panel.admin.pages.album.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);


    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('panel.admin.pages.album.create');
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
            'subtitle' => 'required',

            'status' => 'required',
        ]);


        $album = new Album();
        $album->title = $request->title;
        $album->subtitle = $request->subtitle;
        $album->status = $request->status;
        $album->slug = Str::slug($request->title);
        $album->created_by = Auth::user()->id;
        $album->updated_by = Auth::user()->id;

        $album->save();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.album');
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
        $data = Album::find($id);
        return view('panel.admin.pages.album.edit',compact('data'));
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
            'subtitle' => 'required',

            'status' => 'required',
        ]);


        $album = Album::find($id);

        $album->title = $request->title;
        $album->subtitle = $request->subtitle;
        $album->status = $request->status;
        $album->slug = Str::slug($request->title);

        $album->updated_by = Auth::user()->id;

        $album->save();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Album::find($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.album');
    }


    public function trash()
    {
        $datas = Album::onlyTrashed()->paginate(5);
        $jumlahtrash = Album::onlyTrashed()->count();
        $jumlahdraft = Album::where('status', 0)->count();
        $datapublish = Album::where('status', 1)->count();

        return view('panel.admin.pages.album.trash',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function restore($id){
        $data = Album::onlyTrashed()->where('id',$id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }

    public function delete($id)
    {
        $data = Album::onlyTrashed()->where('id',$id);
        $data->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }




}
