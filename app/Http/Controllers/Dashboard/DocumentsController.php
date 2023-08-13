<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;

use App\Models\Documents;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        ],
        [
            'title.required' => 'Bagian ini wajib dilengkapi',
        ]);

        $data = new Documents();

        $data->siswa_id = $request->siswa_id;

        $data->title = $request->title;
        $data->description = $request->description;
        $data->url = $request->url;

        $data->save();

        alert()->success('Berhasil', 'Data telah ditambahkan')->autoclose(1100);
        return redirect('dasbor/siswa/show/' . $data->siswa_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function show(Documents $documents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documents  $documents
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
     * @param  \App\Models\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
        ],
        [
            'title.required' => 'Bagian ini wajib dilengkapi',
        ]);

        $data = new Documents();

        $data->siswa_id = $request->siswa_id;

        $data->title = $request->title;
        $data->description = $request->description;
        $data->url = $request->url;

        $data->update();

        alert()->success('Berhasil', 'Data telah ditambahkan')->autoclose(1100);
        return redirect('dasbor/siswa/show/' . $data->siswa_id);
    }

    public function destroy($id)
    {
        Documents::where('id', $id)->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }

}