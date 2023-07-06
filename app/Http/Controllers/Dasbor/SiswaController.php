<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;

use Illuminate\Support\Str;
use App\Models\Siswa;
use App\Models\Documents;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Siswa::where([
            ['first_name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('first_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('middle_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('last_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->orderBy('first_name', 'asc')->paginate(5);
        $jumlahtrash = Siswa::onlyTrashed()->count();
        $jumlahdraft = Siswa::where('status', 'Draft')->count();
        $datapublish = Siswa::where('status', 'Publish')->count();

        return view('dasbor.siswa.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function draft()
    {
        $datas = Siswa::where([
            ['first_name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('first_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('middle_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('last_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->orderBy('first_name', 'asc')->paginate(5);
        $jumlahtrash = Siswa::onlyTrashed()->count();
        $jumlahdraft = Siswa::where('status', 'Draft')->count();
        $datapublish = Siswa::where('status', 'Publish')->count();

        return view('dasbor.siswa.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dasbor.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'first_name' => 'required',
            ],
            [
                'first_name.required' => 'Bagian ini wajib dilengkapi',
            ]
        );

        $data = new Siswa();

        // biography
        $data->first_name = $request->first_name;
        $data->middle_name = $request->middle_name;
        $data->last_name = $request->last_name;

        // create slug
        $data->slug = Str::slug($data->first_name . '' . $data->middle_name . '' . $data->last_name);

        // birth        
        $data->place_of_birth = $request->place_of_birth;
        $data->date_of_birth = $request->date_of_birth;

        // picture creation
        if (isset($request->picture)) {

            // create file name
            $fileName = $request->picture->getClientOriginalName();

            // crate file path
            $path = public_path('gambar/siswa/' . $data->picture);

            // delete file if exist
            if (file_exists($path)) {
                File::delete($path);
            }

            // adding file name into database variable
            $data->picture = $fileName;

            // move file into folder path with the file name
            $request->picture->move(public_path('gambar/siswa'), $fileName);
        }


        // contact info

        // emails

        // education

        // other
        $data->status = $request->status;

        $data->save();

        alert()->success('Berhasil', 'Data telah ditambahkan')->autoclose(1100);
        return redirect('dasbor/siswa/show/' . Siswa::find($data->id)->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Siswa::where('id', $id)->first();
        $documents = Documents::where('siswa_id', $id)->orderBy('title', 'asc')->get();
        $formal_educations = Education::where('siswa_id', $id)->where('category', 'Formal')->orderBy('year', 'desc')->get();
        $non_formal_educations = Education::where('siswa_id', $id)->where('category', 'Non Formal')->orderBy('year', 'desc')->get();
        return view('dasbor.siswa.show', compact('data', 'documents', 'formal_educations', 'non_formal_educations'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Siswa::where('id', $id)->first();
        $documents = Documents::where('siswa_id', $id)->orderBy('title', 'asc')->get();
        $educations = Education::where('siswa_id', $id)->orderBy('year', 'asc')->get();
        return view('dasbor.siswa.edit', compact('data', 'documents', 'educations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // create validation
        $request->validate(
            [
                'first_name' => 'required',
            ],
            [
                'first_name.required' => 'Bagian ini wajib dilengkapi',
            ]
        );

        // select data by id
        $data = Siswa::find($id);

        // create new variable
        $data->first_name = $request->first_name;
        $data->middle_name = $request->middle_name;
        $data->last_name = $request->last_name;

        // create slug by names
        $data->slug = Str::slug($data->first_name . '' . $data->middle_name . '' . $data->last_name);

        // documents
        $data->doc_google_sheets = $request->doc_google_sheets;

        // other
        $data->status = $request->status;


        // picture creation
        if (isset($request->picture)) {

            // create file name
            $fileName = $request->picture->getClientOriginalName();

            // crate file path
            $path = public_path('gambar/siswa/' . $data->picture);

            // delete file if exist
            if (file_exists($path)) {
                File::delete($path);
            }

            // adding file name into database variable
            $data->picture = $fileName;

            // move file into folder path with the file name
            $request->picture->move(public_path('gambar/siswa'), $fileName);
        }


        // update process
        $data->update();

        // create alert
        alert()->success('Berhasil', 'Data telah diubah')->autoclose(1100);

        // redirect page
        return redirect('dasbor/siswa/show/' . Siswa::find($data->id)->id);
    }

    /**
     * update > profile.
     *
     */
    public function update_profile(Request $request, $id) {
        
        // select data by id
        $data = Siswa::find($id);

        // create new variable
        $data->profile = $request->profile;
        $data->status = $request->status;

        // update process
        $data->update();

        // create alert
        alert()->success('Berhasil', 'Data telah diubah')->autoclose(1100);
        return redirect()->back();

    }

    /**
     * update > biography.
     *
     */
    public function update_picture(Request $request, $id) {
        // dd('update picture');

        // select data by id
        $data = Siswa::find($id);
        
        // picture creation
        if (isset($request->picture)) {

            // create file name
            $fileName = $request->picture->getClientOriginalName();

            // crate file path
            $path = public_path('gambar/siswa/' . $data->picture);

            // delete file if exist
            if (file_exists($path)) {
                File::delete($path);
            }

            // adding file name into database variable
            $data->picture = $fileName;

            // move file into folder path with the file name
            $request->picture->move(public_path('gambar/siswa'), $fileName);
        }

        // update process
        $data->update();

        // create alert
        alert()->success('Berhasil', 'Data telah diubah')->autoclose(1100);
        return redirect()->back();

    }

    /**
     * update > biography.
     *
     */
    public function update_biography(Request $request, $id) {
        
        // select data by id
        $data = Siswa::find($id);

        // create new variable
        $data->first_name = $request->first_name;
        $data->middle_name = $request->middle_name;
        $data->last_name = $request->last_name;
        $data->place_of_birth = $request->place_of_birth;
        $data->date_of_birth = $request->date_of_birth;

        // update process
        $data->update();

        // create alert
        alert()->success('Berhasil', 'Data telah diubah')->autoclose(1100);
        return redirect()->back();

    }

    /**
     * update > contact
     *
     */
    public function update_contact(Request $request, $id) {
        
        // dd('contact info');

        // select data by id
        $data = Siswa::find($id);

        // create new variable
        $data->phone = $request->phone;
        $data->email_google = $request->email_google;
        $data->email_outlook = $request->email_outlook;
        $data->email_sagu = $request->email_sagu;
        $data->email_campus_1 = $request->email_campus_1;

        // update process
        $data->update();

        // create alert
        alert()->success('Berhasil', 'Data telah diubah')->autoclose(1100);
        return redirect()->back();

    }

    /**
     * update > address
     *
     */
    public function update_address(Request $request, $id) {
        
        // select data by id
        $data = Siswa::find($id);

        // create new variable
        $data->first_name = $request->first_name;

        // update process
        $data->update();

        // create alert
        alert()->success('Berhasil', 'Data telah diubah')->autoclose(1100);
        return redirect()->back();

    }

    /**
     * update > documents
     *
     */
    public function update_documents(Request $request, $id) {

        // dd('doc_google_sheets');
        
        // select data by id
        $data = Siswa::find($id);

        // create new variable
        $data->doc_google_sheets = $request->doc_google_sheets;

        // update process
        $data->update();

        // create alert
        alert()->success('Berhasil', 'Data telah diubah')->autoclose(1100);
        return redirect()->back();

    }

    /**
     * update > educations
     *
     */
    public function update_educations(Request $request, $id) {
        
        // select data by id
        $data = Siswa::find($id);

        // create new variable
        $data->doc_google_sheets = $request->doc_google_sheets;

        // update process
        $data->update();

        // create alert
        alert()->success('Berhasil', 'Data telah diubah')->autoclose(1100);
        return redirect()->back();

    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Siswa::find($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.siswa.trash');
    }

    public function trash()
    {
        $datas = Siswa::onlyTrashed()->paginate(5);
        $jumlahtrash = Siswa::onlyTrashed()->count();
        $jumlahdraft = Siswa::where('status', 'Draft')->count();
        $datapublish = Siswa::where('status', 'Publish')->count();

        return view('dasbor.siswa.trash', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function restore($id)
    {
        $data = Siswa::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }

    public function delete($id)
    {

        $data = Siswa::onlyTrashed()->findOrFail($id);
        $path = public_path('gambar/siswa/' . $data->picture);

        if (file_exists($path)) {
            File::delete($path);
        }


        // $data = Siswa::onlyTrashed()->where('id', $id);

        // // create file path
        // $path = public_path('gambar/siswa');

        // // delete file if exist
        // if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
        //     unlink($path . '/' . $data->picture);
        // endif;

        $data->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }
}
