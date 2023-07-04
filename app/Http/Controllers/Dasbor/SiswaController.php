<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;

use App\Models\Siswa;
use App\Models\Documents;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Siswa::where([
            ['first_name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('first_name', 'LIKE', '%' . $s . '%')
                        // ->orWhere('middle_name', 'LIKE', '%' . $s . '%')
                        // ->orWhere('last_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest()->paginate(5);
        $jumlahtrash = Siswa::onlyTrashed()->count();
        $jumlahdraft = Siswa::where('status', 'Draft')->count();
        $datapublish = Siswa::where('status', 'Publish')->count();

        return view('dasbor.siswa.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function draft() {
        $datas = Siswa::where([
            ['first_name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('first_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('middle_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('last_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->latest()->paginate(5);
        $jumlahtrash = Siswa::onlyTrashed()->count();
        $jumlahdraft = Siswa::where('status', 'Draft')->count();
        $datapublish = Siswa::where('status', 'Publish')->count();

        return view('dasbor.siswa.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dasbor.siswa.create');
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
            'first_name' => 'required',
        ],
        [
            'first_name.required' => 'Bagian ini wajib dilengkapi',
        ]);

        $data = new Siswa();

        // biography
        $data->first_name = $request->first_name;
        $data->middle_name = $request->middle_name;
        $data->last_name = $request->last_name;

        // birth        
        $data->place_of_birth = $request->place_of_birth;
        $data->date_of_birth = $request->date_of_birth;

        // pictures


        // contact info

        // emails

        // education
        
        // other
        $data->status = $request->status;

        $data->save();

        alert()->success('Berhasil', 'Data telah ditambahkan')->autoclose(1100);
        return redirect('dasbor/siswa/show/' . Siswa::find($data->id)->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Siswa::where('id', $id)->first();
        $documents = Documents::where('siswa_id', $id)->get();
        return view('dasbor.siswa.show', compact('data', 'documents'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Siswa::where('id', $id)->first();
        return view('dasbor.siswa.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'first_name' => 'required',
        ],
        [
            'first_name.required' => 'Bagian ini wajib dilengkapi',
        ]);

        $data = Siswa::find($id);

        $data->first_name = $request->first_name;
        $data->middle_name = $request->middle_name;
        $data->last_name = $request->last_name;

        // documents
        $data->doc_google_sheets = $request->doc_google_sheets;
        
        // other
        $data->status = $request->status;

        $data->update();

        alert()->success('Berhasil', 'Data telah diubah')->autoclose(1100);
        return redirect('dasbor/siswa/show/' . Siswa::find($data->id)->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Siswa::find($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.siswa.trash');
    }

    public function trash()
    {
        $datas = Siswa::onlyTrashed()->paginate(5);
        $jumlahtrash = Siswa::onlyTrashed()->count();
        $jumlahdraft = Siswa::where('status', 'Draft')->count();
        $datapublish = Siswa::where('status', 'Publish')->count();

        return view('dasbor.siswa.trash', compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function restore($id){
        $data = Siswa::onlyTrashed()->where('id',$id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }

    public function delete($id)
    {
        $data = Siswa::onlyTrashed()->where('id',$id);
        $data->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }

}
