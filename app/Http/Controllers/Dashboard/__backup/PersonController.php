<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;
use Image;
use Alert;
use Illuminate\Support\Facades\File;
use Storage;
use Illuminate\Support\Str;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas = Person::where([
            ['name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',1)->latest()->paginate(5);
        $jumlahtrash = Person::onlyTrashed()->count();
        $jumlahdraft = Person::where('status', 0)->count();
        $datapublish = Person::where('status', 1)->count();


        return view('panel.admin.pages.person.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.admin.pages.person.create');
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
            'name' => 'required',
            'email' => 'required|email|unique:people',
            'phone' => 'required|numeric',
            'address' => 'required',
            'devisi' => 'required',
            'jabatan' => 'required',
            'no' => 'required|numeric',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'phone.required' => 'No. Telepon tidak boleh kosong',
            'phone.numeric' => 'No. Telepon tidak valid',
            'address.required' => 'Alamat tidak boleh kosong',
            'devisi.required' => 'Devisi tidak boleh kosong',
            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'no.required' => 'No. Urut tidak boleh kosong',
            'no.numeric' => 'No. Urut tidak valid',
            'status.required' => 'Status tidak boleh kosong',
            'image.required' => 'Gambar tidak boleh kosong',
            'image.image' => 'Gambar tidak valid',
            'image.mimes' => 'Gambar tidak valid',
            'image.max' => 'Gambar tidak boleh lebih dari 2MB',
        ]);

        $tahun = date("Y");
        $bulan = date("M");


        $filename  = 'nokensoft'.'-'.date('Y-m-d-H-i-s').$request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/resource/sdm/'.$tahun.'/'.$bulan,$filename);

           $url = ('storage/resource/sdm/'.$tahun.'/'.$bulan.'/'.$filename);

        $person = new Person();

        $person->name = $request->name;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->address = $request->address;
        $person->devisi = $request->devisi;
        $person->jabatan = $request->jabatan;
        $person->no = $request->no;
        $person->status = $request->status;
        $person->image = $url;

        $person->save();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.person');




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
        $data = Person::find($id);
        return view('panel.admin.pages.person.edit',compact('data'));
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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required',
            'devisi' => 'required',
            'jabatan' => 'required',
            'no' => 'required|numeric',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'phone.required' => 'No. Telepon tidak boleh kosong',
            'phone.numeric' => 'No. Telepon tidak valid',
            'address.required' => 'Alamat tidak boleh kosong',
            'devisi.required' => 'Devisi tidak boleh kosong',
            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'no.required' => 'No. Urut tidak boleh kosong',
            'no.numeric' => 'No. Urut tidak valid',
            'status.required' => 'Status tidak boleh kosong',
            'image.image' => 'Gambar tidak valid',
            'image.mimes' => 'Gambar tidak valid',
            'image.max' => 'Gambar tidak boleh lebih dari 2MB',
        ]);

        $tahun = date("Y");
        $bulan = date("M");

        $person = Person::find($id);

        if($request->hasFile('image')){
            $filename  = 'nokensoft'.'-'.date('Y-m-d-H-i-s').$request->file('image')->getClientOriginalName();

            $request->file('image')->storeAs('public/resource/sdm/'.$tahun.'/'.$bulan,$filename);

               $url = ('storage/resource/sdm/'.$tahun.'/'.$bulan.'/'.$filename);

               $datalama = Person::findOrFail($id);
               if($datalama->image){
                File::delete($datalama->image);
               }
        }else{
            $url = $person->image;
        }

        $person->name = $request->name;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->address = $request->address;
        $person->devisi = $request->devisi;
        $person->jabatan = $request->jabatan;
        $person->no = $request->no;
        $person->status = $request->status;
        $person->image = $url;
        $person->save();


    alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
    return redirect()->route('dasbor.person');

    }






    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
