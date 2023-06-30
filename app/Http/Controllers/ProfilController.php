<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    public function index()
    {
        return view('dasbor.profil.index');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'picture' => 'image|mimes:jpeg,png,jpg|max:4096',
        ],[
            'name.required'                => 'Nama  tidak boleh kosong!',
            'emaill.required'              => 'Email  tidak boleh kosong!',
            'emaill.unique'                => 'Email  sudah digunakan,Silakan gunakan email yang lain!',
            'picture.mimes'                => 'Foto harus dengan jenis PNG,JPG,JPEG!',
        ]);

        if ($validator->fails() ) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $account = User::find(Auth::user()->id);
                $account->name = $request->name;
                $account->email = $request->email;
                $account->slug = Str::slug($request->name);

                if ($request->picture) {
                    $imageName = Str::slug($request->name). '.' . $request->picture->extension();
                    $path = public_path('gambar/pengguna');
                    if (!empty($account->picture) && file_exists($path . '/' . $account->picture)) :
                        unlink($path . '/' . $account->picture);
                    endif;
                    $account->picture = $imageName;
                    $request->picture->move(public_path('gambar/pengguna'), $imageName);
                }
                $account->update();
                Alert::toast('Berhasil!', 'success');
                return redirect()->back();
            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Opss Gagal!', 'error');
                return redirect()->back();
            }
        }
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->only('current_passsowrd','password','password_confirmation'), [
            'current_passsowrd' => 'required',
            'password' => 'required|min:8|confirmed|different:current_passsowrd',
        ],[
            'current_passsowrd.required'       => 'Kata sandi lama  tidak boleh kosong!',
            'password.required'                => 'Kata sandi Baru  tidak boleh kosong!',
            'password.confirmed'                => 'Konfirmasi kata sandi baru tidak cocok!',
            'password.different'                => 'Kata sandi lama dan kata sandi saat ini harus berbeda.!',
            'password.min'                       => 'Kata sandi minimal 8 karakter',
            'password_confirmation.required'   => 'Konfirmasi Kata sandi baru  tidak boleh kosong!',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
               if (Hash::check($request->current_passsowrd,Auth::user()->password)) {
                    $user = User::find(Auth::user()->id);
                    $user->password = Hash::make($request->password);
                    $user->save();
                    Auth::logout();
                    return redirect('/login')->with(['success' => 'Berhasil! Silakan Login mengunakan kata sandi baru anda']);;
               } else {
                    Alert::toast('Terjadi sebuah kesalahan!','info');
                    return redirect()->back();
               }
            } catch (\Throwable $th) {
                Alert::toast('Gagal','error');
                return redirect()->back();
            }
        }
    }

}
