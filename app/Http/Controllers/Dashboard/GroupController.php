<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class GroupController extends Controller
{
        // PUBLISH VIEW
        public function index()
        {
            $datas = Group::where([
                ['group_title', '!=', Null],
                [function ($query) {
                    if (($s = request()->s)) {
                        $query->orWhere('group_title', 'LIKE', '%' . $s . '%')
                            ->orWhere('short_description', 'LIKE', '%' . $s . '%')
                            ->get();
                    }
                }]
            ])->where('status', 'Publish')->latest()->paginate();

            $jumlahtrash = Group::onlyTrashed()->count();
            $jumlahdraft = Group::where('status', 'Draft')->count();
            $datapublish = Group::where('status', 'Publish')->count();

            return view('dashboard.database.groups.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
        }

        // DRAFT VIEW
        public function draft()
        {
            $datas = Group::where([
                ['group_title', '!=', Null],
                [function ($query) {
                    if (($s = request()->s)) {
                        $query->orWhere('group_title', 'LIKE', '%' . $s . '%')
                            ->orWhere('short_description', 'LIKE', '%' . $s . '%')
                            ->get();
                    }
                }]
            ])->where('status', 'Draft')->latest()->paginate(5);

            $jumlahtrash = Group::onlyTrashed()->count();
            $jumlahdraft = Group::where('status', 'Draft')->count();
            $datapublish = Group::where('status', 'Publish')->count();

            return view('dashboard.database.groups.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
        }

        // CREATE VIEW
        public function create()
        {
            return view('dashboard.database.groups.create');
        }

        // STORE
        public function store(Request $request)
        {
            $validator = Validator::make(
                $request->all(),
                [
                    'group_title' => 'required',
                ],
                [
                    'group_title.required' => 'This is a reaquired field',
                ]
            );

            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator);
            } else {
                try {
                    $data = new Group();

                    $data->group_title = $request->group_title;
                    $data->short_description = $request->short_description;
                    $data->full_description = $request->full_description;
                    $data->status = $request->status;

                    $data->save();

                    Alert::toast('Created! This data has been created successfully.', 'success');
                    return redirect('dashboard/groups/show/' . $data->id);
                } catch (\Throwable $th) {
                    Alert::toast('Failed! Something is wrong', 'error');
                    return redirect()->back();
                }
            }
        }

        // SHOW VIEW
        public function show($id)
        {
            $data = Group::where('id', $id)->first();

            if ($data) {
                return view('dashboard.database.groups.show', compact('data'))->with('i', (request()->input('page', 1) - 1) * 10);
            } else {
                return redirect('dashboard/groups');
            }
        }

        // EDIT VIEW
        public function edit($id)
        {
            $data = Group::where('id', $id)->first();
            return view('dashboard.database.groups.edit', compact('data'));
        }

        // UPDATE
        public function update(Request $request, $id)
        {
            $request->validate(
                [
                    'group_title' => 'required',
                    // 'short_description' => 'required',
                ],
                [
                    'group_title.required' => 'Data ini wajib dilengkapi',
                    // 'short_description.required' => 'Data ini wajib dilengkapi',
                ]
            );

            $data = Group::find($id);

            $data->group_title = $request->group_title;
            $data->short_description = $request->short_description;
            $data->full_description = $request->full_description;

            // other
            $data->status = $request->status;
            $data->update();

            // create alert & redirect
            alert()->success('Updated', 'Data has been updated')->autoclose(1100);
            return redirect('/dashboard/groups/show/' . Group::find($data->id)->id);
        }

        // DESTROY OR MOVE TO TRASH
        public function destroy($id)
        {
            $data = Group::find($id);
            $data->delete();

            // create alert & redirect
            alert()->success('Trashed', 'Data has been moved to trash!')->autoclose(1100);
            return redirect()->back();
        }

        // TRASH VIEW
        public function trash()
        {
            $datas = Group::onlyTrashed()->paginate(5);

            $jumlahtrash = Group::onlyTrashed()->count();
            $jumlahdraft = Group::where('status', 'Draft')->count();
            $datapublish = Group::where('status', 'Publish')->count();

            return view('dashboard.database.groups.trash', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
        }

        // RESTORE
        public function restore($id)
        {
            $data = Group::onlyTrashed()->where('id', $id);
            $data->restore();

            // create alert & redirect
            alert()->success('Restored', 'Data has been restored!!')->autoclose(1100);
            return redirect()->back();
        }

        // DELETE PERMANTENTLY
        public function delete($id)
        {
            $data = Group::onlyTrashed()->where('id', $id);
            $data->forceDelete();

            // create alert & redirect
            alert()->success('Deleted', 'Data dleted permanently!!')->autoclose(1100);
            return redirect()->back();
        }

        public function excel_program($id)
        {

            dd('program');
            // $program = Program::where('id', $id)->first();
            // $program_title = $program->program_title ?? 'Other';
            // $title = 'Students-by-program-' .Str::slug($program_title).'-'. Carbon::now()->isoFormat('DMY') . '.xlsx';
            // return Excel::download(new ProgramStudentExport($id), $title);
        }
}
