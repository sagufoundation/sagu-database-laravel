<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Video;
use Alert;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $datas = Video::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',1)->latest()->paginate(5);
        $jumlahtrash = Video::onlyTrashed()->count();
        $jumlahdraft = Video::where('status', 0)->count();
        $datapublish = Video::where('status', 1)->count();


        return view('panel.admin.pages.video.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);




    }

    public function draft()
    {
        $datas = Video::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',0)->latest()->paginate(5);
        $jumlahtrash = Video::onlyTrashed()->count();
        $jumlahdraft = Video::where('status', 0)->count();
        $datapublish = Video::where('status', 1)->count();


        return view('panel.admin.pages.video.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.admin.pages.video.create');
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
            'embed' => 'required',
            'status' => 'required',
        ]);

        $video = new Video();
        $video->title = $request->title;
        $video->embed = $request->embed;
        $video->status = $request->status;
        $video->created_by = Auth::user()->id;
        $video->updated_by = Auth::user()->id;
        $video->save();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.video');
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
        $data = Video::find($id);
        return view('panel.admin.pages.video.edit',compact('data'));

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
            'embed' => 'required',
            'status' => 'required',
        ]);

        $video = Video::find($id);
        $video->title = $request->title;
        $video->embed = $request->embed;
        $video->status = $request->status;
        $video->updated_by = Auth::user()->id;
        $video->save();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.video');
    }



    public function trash()
    {
        $datas = Video::onlyTrashed()->paginate(5);
        $jumlahtrash = Video::onlyTrashed()->count();
        $jumlahdraft = Video::where('status', 0)->count();
        $datapublish = Video::where('status', 1)->count();


        return view('panel.admin.pages.video.trash',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function restore($id)
    {
        $video = Video::onlyTrashed()->where('id',$id);
        $video->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }

    public function restoreall()
    {
        $video = Video::onlyTrashed();
        $video->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }

    public function delete($id)
    {
        $video = Video::onlyTrashed()->where('id',$id);
        $video->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }

    public function deleteall()
    {
        $video = Video::onlyTrashed();
        $video->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }





}
