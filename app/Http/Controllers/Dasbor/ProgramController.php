<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Program::where([
            ['program_title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('program_title', 'LIKE', '%' . $s . '%')
                        ->orWhere('short_description', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest()->paginate(5);
        $jumlahtrash = Program::onlyTrashed()->count();
        $jumlahdraft = Program::where('status', 'Draft')->count();
        $datapublish = Program::where('status', 'Publish')->count();

        return view('dasbor.program.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function draft() {
        $datas = Program::where([
            ['program_title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('program_title', 'LIKE', '%' . $s . '%')
                        ->orWhere('short_description', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->latest()->paginate(5);
        $jumlahtrash = Program::onlyTrashed()->count();
        $jumlahdraft = Program::where('status', 'Draft')->count();
        $datapublish = Program::where('status', 'Publish')->count();

        return view('dasbor.program.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dasbor.program.create');
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
            'program_title' => 'required',
        ],
        [
            'program_title.required' => 'Bagian ini wajib dilengkapi',
        ]);

        $data = new Program();

        $data->program_title = $request->program_title;
        $data->short_description = $request->short_description;
        $data->full_description = $request->full_description;
        
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        
        // other
        $data->status = $request->status;

        $data->save();

        alert()->success('Berhasil', 'Data telah ditambahkan')->autoclose(1100);

        return redirect()->route('dasbor.program');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Program::find($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.program');
    }


    public function trash()
    {
        $datas = Program::onlyTrashed()->paginate(5);
        $jumlahtrash = Program::onlyTrashed()->count();
        $jumlahdraft = Program::where('status', 'Draft')->count();
        $datapublish = Program::where('status', 'Publish')->count();

        return view('dasbor.program.trash',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function restore($id){
        $data = Program::onlyTrashed()->where('id',$id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }

    public function delete($id)
    {
        $data = Program::onlyTrashed()->where('id',$id);
        $data->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }



}
