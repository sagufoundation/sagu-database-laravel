<?php

namespace App\Http\Controllers\Dashboard;

// models
use App\Models\User;

use App\Models\Roles;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Models\Students;

class UserController extends Controller
{
    // INDEX
    public function index(Request $request)
    {

        $datas = User::where([
            ['first_name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('first_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('middle_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('last_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('email', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->whereHas('roles', function ($q) {
            $q->where('name', '!=', 'student');
        })->where('status', 'Publish')->orderBy('first_name', 'asc')->paginate(10);

        $jumlahtrash = User::whereHas('roles', function ($q) {
            $q->where('name', '!=', 'student');
        })->onlyTrashed()->count();
        $jumlahdraft = User::where('status', 'Draft')->whereHas('roles', function ($q) {
            $q->where('name', '=', 'administrator')
            ->orWhere('name','guest')
            ->orWhere('name','librarian')
            ->where('name', '!=', 'student');
        })->count();
        $datapublish = User::where('status', 'Publish')->whereHas('roles', function ($q) {
            $q->where('name', '=', 'administrator')
            ->orWhere('name','guest')
            ->orWhere('name','librarian')
            ->where('name', '!=', 'student');
        })->count();
        return view('dashboard.users.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', ($request->input('page', 1) - 1) * 10);
    }

    // DRAFT
    public function draft(Request $request)
    {
        $datas = User::where([
            ['first_name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('first_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('middle_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('last_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('email', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->whereHas('roles', function ($q) {
            $q->where('name', '!=', 'student');
        })->where('status', 'Draft')->orderBy('first_name', 'asc')->paginate(10);


        $jumlahtrash = User::whereHas('roles', function ($q) {
            $q->where('name', '!=', 'student');
        })->onlyTrashed()->count();
        $jumlahdraft = User::where('status', 'Draft')->whereHas('roles', function ($q) {
            $q->where('name', '!=', 'student');
        })->count();
        $datapublish = User::where('status', 'Publish')->whereHas('roles', function ($q) {
            $q->where('name', '!=', 'student');
        })->count();
        return view('dashboard.users.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', ($request->input('page', 1) - 1) * 10);
    }

    // CREATE
    public function create()
    {
        $roles = Role::where('name', '!=', 'student')->get();
        return view('dashboard.users.create', compact('roles'));
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'first_name'        => 'required',
                'email'             => 'required|email|unique:users,email',
                'phone'             => 'unique:users,phone',
                'password'          => 'required|confirmed|min:8',
                'roles'             => 'required',
                'status'            => 'required',
                'picture'           => 'mimes:png,jpeg,jpg|max:2096',
            ],
            [
                'first_name.required'     => 'This is a reaquired field',
                'email.required'          => 'This is a reaquired field',
                'password.required'       => 'This is a reaquired field',
                'roles.required'          => 'This is a reaquired field',
                'status.required'         => 'This is a reaquired field',

                'picture.mimes'           => 'Type of this file must be PNG, JPG, JPEG',
                'picture.max'             => 'Files must be a maximum of 2 MB',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new User();
                $data->first_name = $request->first_name;
                $data->middle_name = $request->middle_name;
                $data->last_name = $request->last_name;
                $data->job_title = $request->job_title;
                $data->email = $request->email;
                $data->phone = $request->phone;
                $data->password = Hash::make($request->password);
                $data->status = $request->status;
                $data->slug = Str::slug($data->first_name);

                if ($request->picture) {
                    $imageName = $data->slug . '-' . time() . '.' . $request->picture->extension();
                    $path = public_path('images/users');
                    if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                        unlink($path . '/' . $data->picture);
                    endif;
                    $data->picture = 'images/users/' . $imageName;
                    $request->picture->move(public_path('images/users'), $imageName);
                }
                $data->save();
                $data->assignRole($request->roles);

                // create alert & redirect
                Alert::toast('Created! This data has been created successfully.', 'success');
                return redirect('dashboard/users/show/' . $data->id);
            } catch (\Throwable $th) {

                Alert::toast('Failed', 'error');
                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($id)
    {
        $data = User::find($id);
        return view('dashboard.users.show', compact('data'));
    }

    // EDIT
    public function edit($id)
    {
        $data = User::find($id);
        $roles = Role::where('name', '!=', 'student')->get();

        return view('dashboard.users.edit', compact('data', 'roles'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'first_name'            => 'required',
                'email'                 => 'required|email|unique:users,email,' . $id,
                // 'phone'                 => 'unique:users,phone,'.$id,
                'password'              => 'confirmed',
                'roles'                 => 'required',
                'status'                => 'required',
                'picture'               => 'mimes:png,jpeg,jpg|max:2096',
            ],
            [
                'first_name.required'   => 'This is a reaquired field',
                'email.required'        => 'This is a reaquired field',
                'password.required'     => 'This is a reaquired field',
                'roles.required'        => 'This is a reaquired field',
                'status.required'       => 'This is a reaquired field',

                'picture.mimes'         => 'Type of this file must be PNG, JPG, JPEG',
                'picture.max'           => 'Files must be a maximum of 2 MB',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = User::find($id);
                $data->first_name = $request->first_name;
                $data->middle_name = $request->middle_name;
                $data->last_name = $request->last_name;
                $data->job_title = $request->job_title;
                $data->email = $request->email;
                $data->phone = $request->phone;

                $data->password = Hash::make($request->password);

                $data->status = $request->status;
                $data->slug = Str::slug($data->first_name);

                if ($request->picture) {
                    $data->password = bcrypt($request->password);
                }
                if ($request->picture) {
                    $imageName = $data->slug . '-' . time() . '.' . $request->picture->extension();
                    $path = public_path('images/users');
                    if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                        unlink($path . '/' . $data->picture);
                    endif;
                    $data->picture = 'images/users/' . $imageName;
                    $request->picture->move(public_path('images/users'), $imageName);
                }

                $data->update();

                $data->syncRoles(explode(',', $request->roles));

                // if ($request->roles == 3) {
                //     // Student data
                //     $student = new Students();
                //     $student->user_id = $data->id;
                //     $student->save();
                // } else {
                //     $student = Students::where('user_id', $data->id);

                //     $student->delete();
                // }

                // create alert & redirect
                Alert::toast('Created! This data has been updated successfully.', 'success');
                return redirect('dashboard/users/show/' . $data->id);
            } catch (\Throwable $th) {
                Alert::toast('Failed', 'error');
                return redirect()->back();
            }
        }
    }

    // DESTROY
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->save();
        User::find($id)->delete();

        // create alert & redirect
        alert()->success('Trashed', 'Data has been moved to trash!')->autoclose(1100);
        return redirect()->back();
    }

    // TRASH
    public function trash()
    {
        $datas = User::onlyTrashed()->whereHas('roles', function ($q) {
            $q->where('name', '!=', 'student');
        })->paginate(5);
        $jumlahtrash = User::onlyTrashed()->whereHas('roles', function ($q) {
            $q->where('name', '!=', 'student');
        })->count();
        $jumlahdraft = User::where('status', 'Draft')->whereHas('roles', function ($q) {
            $q->where('name', '!=', 'student');
        })->count();
        $datapublish = User::where('status', 'Publish')->whereHas('roles', function ($q) {
            $q->where('name', '!=', 'student');
        })->count();
        return view('dashboard.users.trash', compact('datas', 'datapublish', 'jumlahdraft', 'jumlahtrash'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // RESTORE
    public function restore($id)
    {
        User::withTrashed()->where('id', $id)->restore();

        // create alert & redirect
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1100);
        return redirect()->back();
    }

    // DELETE
    public function delete($id)
    {

        $data = User::withTrashed()->where('id', $id)->first();
        $path = public_path('images/users/' . $data->picture);

        if (file_exists($path)) {
            File::delete($path);
        }
        $data->forceDelete();

        // create alert & redirect
        alert()->success('Deleted', 'Data Program has been delete!')->autoclose(1100);
        return redirect()->back();
    }
}
