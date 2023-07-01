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
        //
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
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        //
    }
}
