<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;

use App\Models\Program;
use App\Models\Province;
use App\Models\Students;
use App\Models\Documents;
use App\Models\Education;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
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
        $datas = User::where([
            ['first_name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('first_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('middle_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('last_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->whereHas('roles',function($q){
            $q->where('name','users');
        })->where('status', 'Publish')->orderBy('first_name', 'asc')->paginate(10);

        $jumlahtrash = User::onlyTrashed()->count();

        $jumlahdraft = User::whereHas('roles',function($q){$q->where('name','users');})->where('status', 'Draft')->count();
        $datapublish = User::whereHas('roles',function($q){$q->where('name','users');})->where('status', 'Publish')->count();

        return view('dashboard.database.students.index',
               compact(
                'datas',
                'jumlahtrash',
                'jumlahdraft',
                'datapublish'
            ))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function draft()
    {
        $datas = User::where([
            ['first_name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('first_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('middle_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('last_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->whereHas('roles',function($q){
            $q->where('name','users');
        })->where('status', 'Draft')->orderBy('first_name', 'asc')->paginate(10);

        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::whereHas('roles',function($q){$q->where('name','users');})->where('status', 'Draft')->count();
        $datapublish = User::whereHas('roles',function($q){$q->where('name','users');})->where('status', 'Publish')->count();

        return view('dashboard.database.students.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        return view('dashboard.database.students.create',compact('provinces'));
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
                'phone' => 'required|unique:users,phone|max:13',
                'email' => 'required|unique:users,email|string',
                'password'  => 'required|confirmed|min:8',
                'status' => 'required',

                'province_id' => 'required',
                'place_of_birth' => 'required',
                'date_of_birth' => 'required',
            ],
            [
                'first_name.required'   => 'This is required',
                'phone.required'        => 'This is required',
                'email.required'        => 'This is required',
                'password.required'     => 'This is required',
                'status.required'       => 'This is required',

                'province_id.required'      => 'This is required',
                'place_of_birth.required'   => 'This is required',
                'date_of_birth.required'    => 'This is required',
            ]
        );

        $data = new User();
        $data->first_name = $request->first_name;
        $data->middle_name = $request->middle_name;
        $data->last_name = $request->last_name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->slug = Str::slug($data->first_name . '' . $data->middle_name . '' . $data->last_name);
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
        $data->save();
        $data->assignRole('6');

        // Student data
        $student = $data->student ?? new Students();
        $student->user_id = $data->id;
        $student->province_id = $request->province_id;
        $student->profile = $request->profile;
        $student->full_address = $request->full_address;
        $student->place_of_birth = $request->place_of_birth;
        $student->date_of_birth = $request->date_of_birth;

        $student->email_google = $request->email_google;
        $student->email_outlook = $request->email_outlook;
        $student->email_sagu = $request->email_sagu;
        $data->students()->save($student);

        alert()->success('Berhasil', 'Data telah ditambahkan')->autoclose(1100);
        return redirect('dashboard/students/show/' . User::find($data->id)->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $Students
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::where('id', $id)->first();
        $documents = Documents::where('user_id', $id)->orderBy('title', 'asc')->get();
        $formal_educations = Education::where('user_id', $id)->where('category', 'Formal')->orderBy('year', 'desc')->get();
        $non_formal_educations = Education::where('user_id', $id)->where('category', 'Non Formal')->orderBy('year', 'desc')->get();
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

        $documents = Documents::where('user_id', $id)->orderBy('title', 'asc')->get();
        $educations = Education::where('user_id', $id)->orderBy('year', 'asc')->get();
        $provinces = Province::orderBy('name', 'asc')->get();
        $programs = Program::orderBy('id', 'desc')->get();

        $data_programs = explode(',', $data->programs);

        return view('dashboard.database.students.edit', compact('data', 'documents', 'educations', 'provinces', 'programs'));
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
        $data = User::find($id);

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
        $data->phone = $request->phone;
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
        $data = User::find($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dashboard.database.students.trash');
    }

    public function trash()
    {
        $datas = User::onlyTrashed()->paginate(10);
        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::whereHas('roles',function($q){$q->where('name','users');})->where('status', 'Draft')->count();
        $datapublish = User::whereHas('roles',function($q){$q->where('name','users');})->where('status', 'Publish')->count();

        return view('dashboard.database.Students.trash', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function restore($id)
    {
        $data = User::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }

    public function delete($id)
    {
        $data = User::onlyTrashed()->findOrFail($id);
        $path = public_path('images/students/' . $data->picture);

        if (file_exists($path)) {
            File::delete($path);
        }

        $data->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }
}
