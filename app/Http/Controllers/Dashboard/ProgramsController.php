<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\Program;
use App\Models\User;
use App\Models\ProgramStudent;
use App\Models\Students;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ProgramsController extends Controller
{
    // PUBLISH VIEW
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
        ])->where('status', 'Publish')->latest()->paginate();

        $jumlahtrash = Program::onlyTrashed()->count();
        $jumlahdraft = Program::where('status', 'Draft')->count();
        $datapublish = Program::where('status', 'Publish')->count();

        return view('dashboard.database.programs.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // DRAFT VIEW
    public function draft()
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
        ])->where('status', 'Draft')->latest()->paginate(5);

        $jumlahtrash = Program::onlyTrashed()->count();
        $jumlahdraft = Program::where('status', 'Draft')->count();
        $datapublish = Program::where('status', 'Publish')->count();

        return view('dashboard.database.programs.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // CREATE VIEW
    public function create()
    {
        return view('dashboard.database.programs.create');
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'program_title' => 'required',
            ],
            [
                'program_title.required' => 'This is a reaquired field',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new Program();

                $data->program_title = $request->program_title;
                $data->short_description = $request->short_description;
                $data->full_description = $request->full_description;
                $data->status = $request->status;

                $data->save();

                Alert::toast('Created! This data has been created successfully.', 'success');
                return redirect('dashboard/programs/show/' . $data->id);
            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // SHOW VIEW
    public function show($id)
    {
        $program = Program::where('id', $id)->first();

        $datas = ProgramStudent::where('program_id', $id)
        ->leftJoin('students', 'student_program.students_id', '=', 'students.id')
        ->leftJoin('provinces', 'students.province_id', '=', 'provinces.id')
        ->leftJoin('users', 'students.user_id', '=', 'users.id')
        ->where('users.status', 'Publish')
        ->orderBy('users.first_name','asc')
        ->get();

         // By Genders
         $female = Students::where('gender', 'Female')->whereHas('users', function ($q) {
            $q->where('status', 'Publish');
        })->whereHas('program', function ($q) use($id) {
            $q->where('program_id', $id);
        })->count();

        $male = Students::where('gender', 'Male')->whereHas('users', function ($q) {
            $q->where('status', 'Publish');
        })->whereHas('program', function ($q) use($id) {
            $q->where('program_id', $id);
        })->count();

        if ($program) {
            return view('dashboard.database.programs.show', compact('program','datas','female','male'))->with('i', (request()->input('page', 1) - 1) * 10);
        } else {
            return redirect('dashboard/programs');
        }
    }

    // EDIT VIEW
    public function edit($id)
    {
        $data = Program::where('id', $id)->first();
        return view('dashboard.database.programs.edit', compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'program_title' => 'required',
                'short_description' => 'required',
            ],
            [
                'program_title.required' => 'Data ini wajib dilengkapi',
                'short_description.required' => 'Data ini wajib dilengkapi',
            ]
        );

        $data = Program::find($id);

        $data->program_title = $request->program_title;
        $data->short_description = $request->short_description;
        $data->full_description = $request->full_description;

        $data->program_start = $request->program_start;
        $data->program_end = $request->program_end;

        // other
        $data->status = $request->status;

        $data->update();

        // create alert & redirect
        alert()->success('Updated', 'Data has been updated')->autoclose(1100);
        return redirect('/dashboard/programs/show/' . Program::find($data->id)->id);
    }

    // DESTROY OR MOVE TO TRASH
    public function destroy($id)
    {
        $data = Program::find($id);
        $data->delete();

        // create alert & redirect
        alert()->success('Trashed', 'Data has been moved to trash!')->autoclose(1100);
        return redirect()->back();
    }

    // TRASH VIEW
    public function trash()
    {
        $datas = Program::onlyTrashed()->paginate(5);

        $jumlahtrash = Program::onlyTrashed()->count();
        $jumlahdraft = Program::where('status', 'Draft')->count();
        $datapublish = Program::where('status', 'Publish')->count();

        return view('dashboard.database.programs.trash', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // RESTORE
    public function restore($id)
    {
        $data = Program::onlyTrashed()->where('id', $id);
        $data->restore();

        // create alert & redirect
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1100);
        return redirect()->back();
    }

    // DELETE PERMANTENTLY
    public function delete($id)
    {
        $data = Program::onlyTrashed()->where('id', $id);
        $data->forceDelete();

        // create alert & redirect
        alert()->success('Deleted', 'Data dleted permanently!!')->autoclose(1100);
        return redirect()->back();
    }
}
