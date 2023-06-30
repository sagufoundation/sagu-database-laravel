<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sistem;

class SistemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sistem::find(1);
        return view('panel.admin.pages.sistem.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function logo()
    {
        $data = Sistem::find(1);
        return view('panel.admin.pages.sistem.logo',compact('data'));
    }

    public function icon()
    {
        $data = Sistem::find(1);
        return view('panel.admin.pages.sistem.icon',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            'email' => 'email',
            'phone' => 'numeric',
        ],
        [
            'email.email' => 'Email tidak valid',
            'phone.numeric' => 'No. Telepon tidak valid',

        ]);

        // Auth::user()->id;
        $sistem = $request->all();
        $sistem = Sistem::find($id);
        $sistem->pemilik = $request->pemilik;
        $sistem->title = $request->title;
        $sistem->tagline = $request->tagline;

        $sistem->email = $request->email;
        $sistem->phone = $request->phone;
        $sistem->address = $request->address;
        $sistem->facebook = $request->facebook;
        $sistem->twitter = $request->twitter;
        $sistem->instagram = $request->instagram;
        $sistem->youtube = $request->youtube;
        $sistem->tiktok = $request->tiktok;
        $sistem->whatsapp = $request->whatsapp;

        $sistem->save();

        if($sistem){
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();
        }else{
            alert()->warning('Gagal', 'Gagal!!')->autoclose(1500);
            return redirect()->back();
        }


    }

    public function updateicon(Request $request)
    {
        $request->validate([

            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',


        ],
        [
            'image.required' => 'Icon tidak boleh kosong',
            'image.image' => 'Icon harus berupa gambar',
            'image.mimes' => 'Icon harus berupa gambar dengan format png,jpg,jpeg',
            'image.max' => 'Icon maksimal 2MB',

        ]);

        $filename  = 'nokensoft'.'-'.date('Y-m-d-H-i-s').$request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/resource/icon/',$filename);

           $url = ('storage/resource/icon/'.$filename);

        $sistem = Sistem::find(1);
        $sistem->icon = $url;
        $sistem->save();

        if($sistem){
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();


        }
    }


    public function updatelogo(Request $request)
    {
        $request->validate([

            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',


        ],
        [
            'image.required' => 'Logo tidak boleh kosong',
            'image.image' => 'Logo harus berupa gambar',
            'image.mimes' => 'logo harus berupa gambar dengan format png,jpg,jpeg',
            'image.max' => 'Logo maksimal 2MB',

        ]);

        $filename  = 'nokensoft'.'-'.date('Y-m-d-H-i-s').$request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/resource/logo/',$filename);

           $url = ('storage/resource/logo/'.$filename);

        $sistem = Sistem::find(1);
        $sistem->logo = $url;
        $sistem->save();

        if($sistem){
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();


        }
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
