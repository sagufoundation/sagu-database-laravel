<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\Students;
use App\Models\Documents;
use App\Models\Education;
use App\Models\Province;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Students::where([
            ['first_name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('first_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('middle_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('last_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->orderBy('first_name', 'asc')->paginate(10);
        $jumlahtrash = Students::onlyTrashed()->count();
        $jumlahdraft = Students::where('status', 'Draft')->count();
        $datapublish = Students::where('status', 'Publish')->count();

        return view('dashboard.database.students.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function draft()
    {
        $datas = Students::where([
            ['first_name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('first_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('middle_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('last_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->orderBy('first_name', 'asc')->paginate(10);
        $jumlahtrash = Students::onlyTrashed()->count();
        $jumlahdraft = Students::where('status', 'Draft')->count();
        $datapublish = Students::where('status', 'Publish')->count();

        return view('dashboard.database.students.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.database.students.create');
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
                'first_name.required' => 'This is required',
            ]
        );

        $data = new Students();

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
            $path = public_path('images/students/' . $data->picture);

            // delete file if exist
            if (file_exists($path)) {
                File::delete($path);
            }

            // adding file name into database variable
            $data->picture = $fileName;

            // move file into folder path with the file name
            $request->picture->move(public_path('images/students'), $fileName);
        }


        // contact info

        // emails

        // education

        // other
        $data->status = $request->status;

        $data->save();

        alert()->success('Berhasil', 'Data telah ditambahkan')->autoclose(1100);
        return redirect('dashboard/students/show/' . Students::find($data->id)->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $Students
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Students::where('id', $id)->first();
        $documents = Documents::where('student_id', $id)->orderBy('title', 'asc')->get();
        $formal_educations = Education::where('student_id', $id)->where('category', 'Formal')->orderBy('year', 'desc')->get();
        $non_formal_educations = Education::where('student_id', $id)->where('category', 'Non Formal')->orderBy('year', 'desc')->get();
        return view('dashboard.database.students.show', compact('data', 'documents', 'formal_educations', 'non_formal_educations'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // dd('explode');




        $data = Students::where('id', $id)->first();

        // $programs = explode(',', $data->programs);

        // foreach($programs as $info) :
        //     echo '<div>'.$info.'</div>';
        // endforeach;

        $documents = Documents::where('student_id', $data->id)->orderBy('title', 'asc')->get();
        $educations = Education::where('student_id', $data->id)->orderBy('year', 'asc')->get();
        $provinces = Province::orderBy('name', 'asc')->get();
        $programs = Program::orderBy('id', 'desc')->get();

        $data_programs = explode(',', $data->programs);

        return view('dashboard.database.students.edit', compact('data', 'documents', 'educations', 'provinces', 'programs', 'data_programs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $Students
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
                'first_name.required' => 'This is required',
            ]
        );

        // select data by id
        $data = Students::find($id);

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
            $path = public_path('images/students/' . $data->picture);

            // delete file if exist
            if (file_exists($path)) {
                File::delete($path);
            }

            // adding file name into database variable
            $data->picture = $fileName;

            // move file into folder path with the file name
            $request->picture->move(public_path('images/students'), $fileName);
        }

        // update process
        $data->update();

        // create alert
        alert()->success('Berhasil', 'Data telah diubah')->autoclose(1100);

        // redirect page
        return redirect('dashboard/students/show/' . Students::find($data->id)->id);
    }

    /**
     * update > profile.
     *
     */
    public function update_profile(Request $request, $id) {

        // select data by id
        $data = Students::find($id);

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
        $data = Students::find($id);

        // picture creation
        if (isset($request->picture)) {

            // create file name
            $fileName = $request->picture->getClientOriginalName();

            // crate file path
            $path = public_path('images/students/' . $data->picture);

            // delete file if exist
            if (file_exists($path)) {
                File::delete($path);
            }

            // adding file name into database variable
            $data->picture = $fileName;

            // move file into folder path with the file name
            $request->picture->move(public_path('images/students'), $fileName);
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
        $data = Students::find($id);

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
        $data = Students::find($id);

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
        $data = Students::find($id);

        // create new variable
        $data->province_id = $request->province_id;
        $data->full_address = $request->full_address;

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
        $data = Students::find($id);

        // create new variable
        $data->doc_google_sheets = $request->doc_google_sheets;

        // update process
        $data->update();

        // create alert
        alert()->success('Berhasil', 'Data telah diubah')->autoclose(1100);
        return redirect()->back();

    }

    /**
     * update > programs
     *
     */
    public function update_programs(Request $request, $id) {


        // dd(json_encode($request->programs)); // explode(",",$fruit)

        // select data by id
        $data = Students::find($id);

        // create new variable
        // $data->programs = $request->programs;
        // $data->programs = json_encode($request->programs); // ['1', '3', '5', '6']
        // $data->programs = implode(',', $request->programs); // ['1', '3', '5', '6']
        $data->programs = collect($request->programs)->implode(','); // ['1', '3', '5', '6']
        // $data->programs = $request->programs; // ['1', '3', '5', '6']

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
        $data = Students::find($id);

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
        $data = Students::find($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dashboard.database.students.trash');
    }

    public function trash()
    {
        $datas = Students::onlyTrashed()->paginate(10);
        $jumlahtrash = Students::onlyTrashed()->count();
        $jumlahdraft = Students::where('status', 'Draft')->count();
        $datapublish = Students::where('status', 'Publish')->count();

        return view('dashboard.database.Students.trash', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function restore($id)
    {
        $data = Students::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }

    public function delete($id)
    {
        $data = Students::onlyTrashed()->findOrFail($id);
        $path = public_path('images/students/' . $data->picture);

        if (file_exists($path)) {
            File::delete($path);
        }

        $data->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }
}