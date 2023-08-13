<?php

namespace App\Http\Controllers\Dasbor;

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
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('email', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Publish')->latest()->paginate(10);

        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 'Draft')->count();
        $datapublish = User::where('status', 'Publish')->count();
        return view('dasbor.pengguna.index',compact('datas','jumlahtrash','jumlahdraft','datapublish'))->with('i', ($request->input('page', 1) - 1) * 5);

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
        return view('panel.admin.pages.users.index',compact('datas','jumlahtrash','jumlahdraft','datapublish'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {
        $roles = Role::pluck('display_name','display_name')->all();
        return view('panel.admin.pages.users.create', compact('roles'));
    }

    // STORE
    public function store1111(Request $request)
        {
            $this->validate($request, [
                'name'              => 'required',
                'email'             => 'required|email|unique:users,email',
                'password'          => 'required|same:confirm-password',
                'roles'             => 'required',
                'status'            => 'required'
            ],
            [
                'name.required'     => 'Nama lengkap tidak boleh kosong',
                'email.required'    => 'Alamat email tidak boleh kosong',
                'email.email'       => 'Alamat email tidak sesuai format',
                'email.unique'      => 'Alamat email sudah terdaftar',
                'password.required' => 'Kata sandi tidak boleh kosong',
                'password.same'     => 'Kata sandi tidak sama',
                'roles.required'    => 'Role tidak boleh kosong',
                'status.required'   => 'Status tidak boleh kosong',
            ]

        );

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.users');
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'              => 'required',
                'email'             => 'required|email|unique:users,email',
                'password'          => 'required|same:confirm-password',
                'roles'             => 'required',
                'status'            => 'required'
            ],
            [
                'name.required'     => 'Nama lengkap tidak boleh kosong',
                'email.required'    => 'Alamat email tidak boleh kosong',
                'email.email'       => 'Alamat email tidak sesuai format',
                'email.unique'      => 'Alamat email sudah terdaftar',
                'password.required' => 'Kata sandi tidak boleh kosong',
                'password.same'     => 'Kata sandi tidak sama',
                'roles.required'    => 'Role tidak boleh kosong',
                'status.required'   => 'Status tidak boleh kosong',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {

                $input = $request->all();
                $input['password'] = Hash::make($input['password']);

                $user = User::create($input);
                $user->assignRole($request->input('roles'));

                alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
                return redirect()->route('dasbor.users');

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
        $user = User::find($id);
        return view('panel.admin.pages.users.show',compact('user'));
    }

    // EDIT
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('panel.admin.pages.users.edit',compact('user','roles','userRole'));
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
        $jumlahdraft = User::where('status', 0)->count();
        $datapublish = User::where('status', 1)->count();
        return view('panel.admin.pages.users.trash',compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
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
