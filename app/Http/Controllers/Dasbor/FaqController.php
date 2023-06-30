<?php

namespace App\Http\Controllers\Dasbor;

use App\Models\Faq;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    public function index(Request $request) {

        $datas = Faq::where([
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('pertanyaan', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Publish')->latest()->paginate(5);
        $jumlahtrash = Faq::onlyTrashed()->count();
        $jumlahdraft = Faq::where('status', 'Draft')->count();
        $jumlahpublish = Faq::where('status', 'Publish')->count();

        return view('panel.admin.pages.faq.index',compact(
            'datas',
            'jumlahtrash',
            'jumlahdraft',
            'jumlahpublish'
            )) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create() {
        return view('panel.admin.pages.faq.create');
    }

    public function edit($id) {
        $data = Faq::where('slug',$id)->first();
        return view('panel.admin.pages.faq.edit',compact('data'));
    }

    public function show($id) {
        $data = Faq::where('slug',$id)->first();
        return view('panel.admin.pages.faq.show',compact('data'));
    }

    public function draft()
    {
        $datas = Faq::where([
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',0)->latest()->paginate(5);
        $jumlahtrash = Faq::onlyTrashed()->count();
        $jumlahdraft = Faq::where('status', 'Draft')->count();
        $jumlahpublish = Faq::where('status', 'Publish')->count();


        return view('panel.admin.pages.faq.index',compact(
            'datas',
            'jumlahtrash',
            'jumlahdraft',
            'jumlahpublish'
            )) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function trash()
    {
        $datas = Faq::onlyTrashed()->paginate(5);
        $jumlahtrash = Faq::onlyTrashed()->count();
        $jumlahdraft = Faq::where('status', 'Draft')->count();
        $jumlahpublish = Faq::where('status', 'Publish')->count();
        return view('panel.admin.pages.faq.trash',compact('datas','jumlahtrash','jumlahdraft','jumlahpublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function destroy($id)
    {
        $data = Faq::findOrFail($id);
        $data->delete();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1200);
        return redirect()->back();
    }

    public function restore($id){
        $data = Faq::onlyTrashed()->where('id',$id);
        $data->restore();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1200);
        return redirect()->back();
    }

    public function delete($id)
    {
        $data = Faq::onlyTrashed()->findOrFail($id);
        $data->forceDelete();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
        return to_route('dasbor.faq.trash');

    }

    public function store(Request $request){

        $validator = Validator::make(
            $request->all(),
            [
                'pertanyaan'             => 'required',
                'jawaban'                => 'required',
            ],[
                'pertanyaan.required'    => 'Pertanyaan FAQ tidak boleh kosong',
                'jawaban.required'       => 'Jawaban  FAQ tidak boleh kosong',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
               $faq = new Faq();
               $faq->pertanyaan = $request->pertanyaan;
               $faq->jawaban = $request->jawaban;
               $faq->status = $request->status;
               $faq->slug = Str::slug($request->pertanyaan);
               $faq->save();

               Alert::toast('FAQ Berhasil dibuat!', 'success');
               return redirect()->route('dasbor.faq');
            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    public function update(Request $request,$id){

        $validator = Validator::make(
            $request->all(),
            [
                'pertanyaan'             => 'required',
                'jawaban'                => 'required',
            ],[
                'pertanyaan.required'    => 'Pertanyaan FAQ tidak boleh kosong',
                'jawaban.required'       => 'Jawaban  FAQ tidak boleh kosong',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
               $faq = Faq::find($id);
               $faq->pertanyaan = $request->pertanyaan;
               $faq->jawaban = $request->jawaban;
               $faq->status = $request->status;
               $faq->slug = Str::slug($request->pertanyaan);
               $faq->update();

               Alert::toast('FAQ Berhasil Diperbarui!', 'success');
               return redirect()->route('dasbor.faq');
            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }
    
}
