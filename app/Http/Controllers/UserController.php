<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class UserController extends Controller
{

    // INDEX
    public function index(Request $request)
    {
        $data = User::where([

            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subjudul', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest()->paginate(5);

        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 'Draft')->count();
        $datapublish = User::where('status', 'Publish')->count();

        return view('dasbor.admin.users.index', compact('data', 'jumlahtrash', 'jumlahdraft', 'datapublish'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    // DRAFT
    public function draft()
    {

        $data = User::where([
            ['name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subjudul', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'draft')->latest()->paginate(5);
        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 'draft')->count();
        $datapublish = User::where('status', 'publish')->count();

        return view('dasbor.admin.users.index', compact(
            'data',
            'jumlahtrash',
            'jumlahdraft',
            'datapublish'
        ))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // TRASH
    public function trash()
    {
        $datas = User::onlyTrashed()->paginate(10);
        return view('dasbor.admin.users.trash', compact('datas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {
        // $roles = Role::pluck('name', 'name')->all();
        $roles  = Role::get();
        return view('dasbor.admin.users.create', compact('roles'));
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'           => 'required',
                'status'         => 'required',
                'email'          => 'required|email|unique:users,email',
                'password'       => 'required|confirmed|min:8',
                'peran'          => 'required',
                'slug'           => 'unique:users,slug',
                'picture'        => 'required|image|mimes:jpeg,png,jpg|max:4096',

            ],[
                'slug.unique'                  => 'Data sudah ada!',
                'name.required'                => 'Nama  tidak boleh kosong!',
                'status.required'              => 'Status  tidak boleh kosong!',
                'peran.required'               => 'Peran  tidak boleh kosong!',
                'email.required'               => 'Email  tidak boleh kosong!',
                'email.unique'                 => 'Email  sudah digunakan,Silakan gunakan email yang lain!',
                'picture.mimes'                => 'Gambar harus dengan jenis PNG,JPG,JPEG!',
                'picture.required'             => 'Gambar tidak  boleh kosong!',

                'password.required'                => 'Kata sandi  tidak boleh kosong!',
                'password.confirmed'               => 'Konfirmasi kata sandi tidak cocok!',
                'password_confirmation.required'   => 'Konfirmasi Kata sandi  tidak boleh kosong!',
                'password.min'                     => 'Kata sandi minimal 8 karakter',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $account = new User();
                $account->name = $request->name;
                $account->email = $request->email;
                $account->status = $request->status;
                $account->password = bcrypt($request->password);
                $account->slug = Str::slug($request->name).'-'.time();

                $posterName = Str::slug($request->name) . '.' . $request->picture->extension();
                $path = public_path('gambar/pengguna');
                if (!empty($account->picture) && file_exists($path . '/' . $account->picture)) :
                    unlink($path . '/' . $account->picture);
                endif;
                $account->picture = $posterName;

                $account->save();
                $request->picture->move(public_path('gambar/pengguna'), $posterName);
                $account->assignRole($request->peran);
                Alert::toast('Pengguna Berhasil dibuat!', 'success');
                if ($account->status == 'Publish') {
                    return redirect()->route('dasbor.pengguna');
                } else {
                    return redirect()->route('dasbor.pengguna.draft');
                }
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
        $user = User::where('slug', $id)->first();
        $roles  = Role::get();
        return view('dasbor.admin.users.show', compact('user', 'roles'));
    }

    // EDIT
    public function edit($id)
    {
        $data   = User::where('slug', $id)->first();
        // $roles  = Role::pluck('name', 'name')->all();
        $roles  = Role::get();
        return view('dasbor.admin.users.edit', compact('data', 'roles'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'status' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => 'confirmed',
                'peran'     => 'required',
                'slug'      => 'unique:users,slug,'.$id,
                'picture' => 'image|mimes:jpeg,png,jpg|max:4096',
            ],[

                'name.required'             => 'Nama  tidak boleh kosong!',
                'status.required'           => 'Status  tidak boleh kosong!',
                'peran.required'            => 'Peran  tidak boleh kosong!',
                'email.required'            => 'Email  tidak boleh kosong!',
                'email.unique'              => 'Email  sudah digunakan,Silakan gunakan email yang lain!',
                'picture.mimes'             => 'Gambar harus dengan jenis PNG,JPG,JPEG!',

                'password.confirmed'        => 'Konfirmasi kata sandi tidak cocok!',
                'password.min'              => 'Kata sandi minimal 8 karakter',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $account = User::find($id);
                $account->name = $request->name;
                $account->email = $request->email;
                $account->status = $request->status;
                $account->slug = Str::slug($request->name).'-'.time();
                if ($request->password) {
                    $account->password = Hash::make($request->password);

                }
                if ($request->picture) {

                    $imageName = Str::slug($request->name) . '.' . $request->picture->extension();
                    $path = public_path('gambar/pengguna');
                    if (!empty($account->picture) && file_exists($path . '/' . $account->picture)) :
                        unlink($path . '/' . $account->picture);
                    endif;
                    $account->picture = $imageName;
                    $request->picture->move(public_path('gambar/pengguna'), $imageName);
                }
                $account->update();
                $account->syncRoles(explode(',', $request->peran));
                Alert::toast('Pengguna Berhasil diperbarui!', 'success');
                if ($account->status == 'Publish') {
                    return redirect()->route('dasbor.pengguna');
                } else {
                    return redirect()->route('dasbor.pengguna.draft');
                }
            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Failed', 'error');
                return redirect()->back();
            }
        }
    }

    // RESTORE
    public function restore($id)
    {
        $data = User::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('dasbor.pengguna');
    }

    // DELETE
    public function delete($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('dasbor.pengguna');
    }

    // DESTROY
    public function destroy($id)
    {
        try {
            $user = User::onlyTrashed()->findOrFail($id);
            $path = public_path('gambar/pengguna/' . $user->picture);

            if (file_exists($path)) {
                File::delete($path);
            }
            $user->forceDelete();
            Alert::toast('Pengguna Berhasil dihapus', 'success');
            return redirect()->back();
        } catch (\Throwable $e) {
            dd($e);
            Alert::toast('Failed', ['error' => $e->getMessage()], 'error');
            return redirect()->back();
        }
    }
}
