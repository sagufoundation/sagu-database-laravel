<?php

namespace App\Http\Controllers\Dashboard;

// models
use App\Models\User;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Roles;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

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
        ])->where('status','Publish')->orderBy('first_name','asc')->paginate(10);

        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 'Draft')->count();
        $datapublish = User::where('status', 'Publish')->count();
        return view('dashboard.users.index',compact('datas','jumlahtrash','jumlahdraft','datapublish'))->with('i', ($request->input('page', 1) - 1) * 5);

    }

    // DRAFT
    public function draft(Request $request)
    {
        $datas = User::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('email', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Draft')->latest()->paginate(10);

        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 'Draft')->count();
        $datapublish = User::where('status', 'Publish')->count();
        return view('dashboard.users.index',compact('datas','jumlahtrash','jumlahdraft','datapublish'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {
        $roles = Role::all();
        return view('dashboard.users.create', compact('roles'));
    }



    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'first_name'        => 'required',
                'last_name'         => 'required',
                'email'             => 'required|email|unique:users,email',
                'phone'             => 'unique:users,phone',
                'password'          => 'required|confirmed|min:8',
                'roles'             => 'required',
                'status'            => 'required',
                'picture'           => 'mimes:png,jpeg,jpg|max:2096',
            ],
            [
                'first_name.required'     => 'This is a reaquired field',
                'last_name.required'      => 'This is a reaquired field',
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
                    $imageName = $data->slug .'-'. time() .'.' . $request->picture->extension();
                    $path = public_path('images/users');
                    if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                        unlink($path . '/' . $data->picture);
                    endif;
                    $data->picture = 'images/users/' . $imageName;
                    $request->picture->move(public_path('images/users'), $imageName);
                }
                $data->save();
                $data->assignRole($request->roles);

                Alert::toast('Created! This data has been created successfully.', 'success');
                return redirect('dashboard/users/show/' . $data->id);
            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($id)
    {
        $data = User::find($id);
        return view('dashboard.users.show',compact('data'));
    }

    // EDIT
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('dashboard.users.edit',compact('user','roles','userRole'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        Hash::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.users');
    }

    // DESTROY
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->status = 0;
        $data->save();
        User::find($id)->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }

    // TRASH
    public function trash(){
        $datas = User::onlyTrashed()->paginate(5);
        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 'Draft')->count();
        $datapublish = User::where('status', 'Publish')->count();
        return view('dashboard.users.trash',compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // RESTORE
    public function restore($id){
        User::withTrashed()->where('id',$id)->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }

    // DELETE
    public function delete($id){
        User::withTrashed()->where('id',$id)->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }

}
