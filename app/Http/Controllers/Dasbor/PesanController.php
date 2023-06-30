<?php

namespace App\Http\Controllers\Dasbor;

use App\Models\Pesan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PesanController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = Pesan::where([
            ['nama', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('nama', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->latest()->paginate(5);
        $jumlahtrash = Pesan::onlyTrashed()->count();
        $datapublish = Pesan::count();
        return view('dasbor.pesan.index', compact('datas', 'jumlahtrash', 'datapublish'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // TRASH
    public function trash()
    {
        $datas = Pesan::onlyTrashed()->paginate(5);
        $jumlahtrash = Pesan::onlyTrashed()->count();
        return view('dasbor.pesan.trash', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama'             => 'required',
                'email'            => 'required|email',
                'no_telf'          => 'required|string',
                'judul_topik'      => 'required',
                'keterangan'       => 'required',
            ],
            [
                'nama.required'     => 'Nama tidak boleh kosong',
                'email.required'     => 'Email tidak boleh kosong',
                'no_telf.required'     => 'Nomor Telfon tidak boleh kosong',
                'judul_topik.required' => 'Judul topik tidak boleh kosong',
                'keterangan.required' => 'Rincian pertanyaan  tidak boleh kosong'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $random = Str::random(15);
                $pengajuan = new Pesan();
                $pengajuan->nama = $request->nama;
                $pengajuan->email = $request->email;
                $pengajuan->no_telf = $request->no_telf;
                $pengajuan->judul_topik = $request->judul_topik;
                $pengajuan->keterangan = $request->keterangan;
                $pengajuan->slug = $random;
                $pengajuan->save();
                alert()->success('Terima Kasih', 'Sukses!!')->autoclose(1200);
                return redirect()->back();
            } catch (\Throwable $th) {
                Alert::toast('Oppss Ada yang salah', 'error');
                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($slug)
    {
        $data = Pesan::where('slug', $slug)->first();
        return view('dasbor.pesan.show', compact('data'));
    }

    // DESTROY
    public function destroy($id)
    {
        $data = Pesan::findOrFail($id);
        $data->delete();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1200);
        return redirect()->back();
    }

    // RESTORE
    public function restore($id)
    {
        $data = Pesan::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1200);
        return redirect()->back();
    }

    // DELETE
    public function delete($id)
    {
        $data = Pesan::onlyTrashed()->findOrFail($id);
        $data->forceDelete();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
        return to_route('dasbor.pesan');
    }


}
