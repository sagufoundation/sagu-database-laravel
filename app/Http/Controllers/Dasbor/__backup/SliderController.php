<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Image;
use Alert;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $datas = Slider::where('status',1)->when(request()->q, function($datas) {
        //     $datas = $datas->where('title', 'like', '%'. request()->s . '%');
        // })->latest()->paginate(5);
        $datas = Slider::where([
            ['title', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',1)->latest()->paginate(5);
        // $datas = Slider::where('status',1)->latest()->paginate(5);

        $jumlahtrash = Slider::onlyTrashed()->count();
        $jumlahdraft = Slider::where('status', 0)->count();

        return view('panel.admin.pages.slider.index',compact('datas','jumlahtrash','jumlahdraft')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function draft(Request $request)
    {
        // $datas = Slider::where('status',1)->when(request()->q, function($datas) {
        //     $datas = $datas->where('title', 'like', '%'. request()->s . '%');
        // })->latest()->paginate(5);

        $datas = Slider::where([
            ['title', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',0)->latest()->paginate(5);
        // $datas = Slider::where('status',1)->latest()->paginate(5);

        $jumlahtrash = Slider::onlyTrashed()->count();
        $jumlahdraft = Slider::where('status', 0)->count();

        return view('panel.admin.pages.slider.index',compact('datas','jumlahtrash','jumlahdraft')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.admin.pages.slider.create');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/resource/sliders', $image->hashName());

        //create slider
        $slider = Slider::create([
            'image'=> $image->hashName(),
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'status' => $request->status,

        ]);

        if ($slider) {
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        }


        return redirect('app/slider');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data = Slider::whereId($id)->first();

      return view('dasbor.slider.detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Slider::whereId($id)->first();

      return view('panel.admin.pages.slider.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */
    public function update(Request $request, $id)
    {
        if(!empty( $request->file('image'))){

            $filename  = 'nokensoft'.'-'.date('Y-m-d-H-i-s').$request->file('image')->getClientOriginalName();

        //    Input::file('foto')->move(public_path().'/source/upload',$filename);

        $request->file('image')->storeAs('public/resource/sliders',$filename);
           //    $image->storeAs('public/resource/sliders', $image->hashName());

           $datalama = Slider::findOrFail($id);
           if($datalama->image){
            File::delete($datalama->image);

        }

           $data = $request->all();
           $data = array(


             'image'=> $filename,
             'title' => $request->title,
             'subtitle' => $request->subtitle,
             'status' => $request->status,

            );



     $Slider = Slider::find($id);
        $Slider->update($data);
             }
              else {
                  $data = $request->all();
                  $data = array(
                    'title' => $request->title,
                    'subtitle' => $request->subtitle,
                    'status' => $request->status,);




     $Slider = Slider::find($id);
        $Slider->update($data);
              }
              alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
              return redirect('app/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = Slider::find($id);




        if($data->delete()) {
            //return success with Api Resource
            alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
        }

    }



    public function trash()
{
    $datas = Slider::onlyTrashed()->paginate(10);

    return view('panel.admin.pages.slider.trash',compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
}





public function restore($id)
{
    $data = Slider::onlyTrashed()->findOrFail($id);
    $data->restore();

    return to_route('dasbor.slider.trash')->with('success','Data restored successfully');
}




public function delete($id)
{
    $data = Slider::onlyTrashed()->findOrFail($id);

    //dd($data);
    if($data->image){
        Storage::delete('public/resource/sliders/'.$data->image);


    }

    $data->forceDelete();

    alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
    return to_route('dasbor.slider.trash');

}

}
