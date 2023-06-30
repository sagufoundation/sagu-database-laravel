<?php

namespace App\Http\Controllers\Dasbor;

use Image;
use Storage;
use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = Banner::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Publish')->latest()->paginate(5);
        $jumlahtrash = Banner::onlyTrashed()->count();
        $jumlahdraft = Banner::where('status', 'Draft')->count();
        $datapublish = Banner::where('status', 'Publish')->count();

        return view('panel.admin.pages.banner.index',compact('datas','jumlahtrash','jumlahdraft','datapublish'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // DRAFT
    public function draft()
    {
        $datas = Banner::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Draft')->latest()->paginate(5);
        $jumlahtrash = Banner::onlyTrashed()->count();
        $jumlahdraft = Banner::where('status', 'Draft')->count();
        $datapublish = Banner::where('status', 'Publish')->count();

        return view('panel.admin.pages.banner.index',compact('datas','jumlahtrash','jumlahdraft','datapublish'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {
        //
    }

    // STORE
    public function store(Request $request)
    {
        $tahun = date("Y");
        $bulan = date("M");
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);

           //upload image
           $filename  = 'nokensoft'.'-'.date('Y-m-d-H-i-s').$request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/resource/banners/'.$tahun.'/'.$bulan,$filename);

           $url = ('storage/resource/banners/'.$tahun.'/'.$bulan.'/'.$filename);

        $form_data = array(
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link' => $request->link,
            'image' => $url,
            'status' => $request->status,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
            'slug' => Str::slug($request->title, '-'),
        );

        Banner::create($form_data);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('dasbor.banner');
    }

    // SHOW
    public function show($id)
    {
        $data = Banner::where('slug',$id)->first();
        return view('panel.admin.pages.banner.show', compact('data'));
    }

    // EDIT
    public function edit($id)
    {
        $data = Banner::where('slug',$id)->first();
        return view('panel.admin.pages.banner.edit', compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(),
            [
                'title'      => 'required',
                'subtitle'   => 'required',
                'link'       => 'required',
                'image'      => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],[
                'title.required'     => 'Judul tidak boleh kosong',
                'subtitle.required'  => 'Sub Judul tidak boleh kosong',
                'link.required'      => 'Link tidak boleh kosong',
                'image.required'     => 'Gambar  tidak boleh kosong',
                'image.mimes'        => 'Gambar harus jenis JPEG,JPG,GIF,SVG',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
               $random = Str::random(15);

               $banner = Banner::find($id);
               $banner->title = Str::upper($request->title);
               $banner->subtitle = Str::upper($request->subtitle);
               $banner->link = $request->link;
               $banner->status = $request->status;
               $banner->slug = $random;

               $imageName = Str::slug(12). '.' . $request->image->extension();
               $path = public_path('file/banner');
               if (!empty($banner->image) && file_exists($path . '/' . $banner->image)) :
                   unlink($path . '/' . $banner->image);
               endif;
               $banner->image = $imageName;
               $request->image->move(public_path('file/banner'), $imageName);

               $banner->update();
               Alert::toast('Banner Berhasil Diperbarui!', 'success');
               return redirect()->route('dasbor.banner');
            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }


      alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1200);
        return redirect()->route('dasbor.banner');

    }

    // DESTROY
    public function destroy($id)
    {

        $data = Banner::findOrFail($id);
        $data->delete();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1200);
        return redirect()->back();


    }

    // TRASH
    public function trash()
    {
        $datas = Banner::onlyTrashed()->paginate(5);
        $jumlahtrash = Banner::onlyTrashed()->count();
        $jumlahdraft = Banner::where('status', 0)->count();
        $datapublish = Banner::where('status', 1)->count();


        return view('panel.admin.pages.banner.trash',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // RESTORE
    public function restore($id){
        $data = Banner::onlyTrashed()->where('id',$id);
        $data->restore();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1200);
        return redirect()->back();
    }

    // DELETE
    public function delete($id)
    {
        $data = Banner::onlyTrashed()->findOrFail($id);

        if($data->image){
            File::delete($data->image);
        }

        $data->forceDelete();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1200);
        return redirect()->back();
    }

}
