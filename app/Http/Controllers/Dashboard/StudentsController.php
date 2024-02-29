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
use App\Models\ProgramStudent;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

use App\Exports\StudentExport;
use App\Exports\ProgramStudentExport;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class StudentsController extends Controller
{
    // PUBLISH VIEW
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
        ])->whereHas('roles', function ($q) {
            $q->where('name', 'student');
        })->where('status', 'Publish')->orderBy('first_name', 'asc')->paginate(10);

        $jumlahtrash = User::onlyTrashed()->count();

        $jumlahdraft = User::whereHas('roles', function ($q) {
            $q->where('name', 'student');
        })->where('status', 'Draft')->count();
        $datapublish = User::whereHas('roles', function ($q) {
            $q->where('name', 'student');
        })->where('status', 'Publish')->count();

        return view(
            'dashboard.database.students.index',
            compact(
                'datas',
                'jumlahtrash',
                'jumlahdraft',
                'datapublish'
            )
        )->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // DRAFT VIEW
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
        ])->whereHas('roles', function ($q) {
            $q->where('name', 'student');
        })->where('status', 'Draft')->orderBy('first_name', 'asc')->paginate(10);

        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::whereHas('roles', function ($q) {
            $q->where('name', 'student');
        })->where('status', 'Draft')->count();
        $datapublish = User::whereHas('roles', function ($q) {
            $q->where('name', 'student');
        })->where('status', 'Publish')->count();

        return view('dashboard.database.students.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // CREATE VIEW
    public function create()
    {
        $provinces = Province::all();
        return view('dashboard.database.students.create', compact('provinces'));
    }

    // STORE
    public function store(Request $request)
    {

        $request->validate(
            [
                'first_name' => 'required',
                // 'phone' => 'required|unique:users,phone|max:13',
                'email' => 'required|unique:users,email|string',
                'password'  => 'required|confirmed|min:8',
                'password_confirmation' => 'required_with:password|same:password|min:8'
            ],
            [
                'first_name.required'   => 'This is required',
                // 'phone.required'        => 'This is required',
                'email.required'        => 'This is required',
                'password.required'     => 'This is required',
                'password_confirmation.required'     => 'This is required',
            ]
        );

        $data = new User();

        $data->first_name = $request->first_name;
        $data->middle_name = $request->middle_name;
        $data->last_name = $request->last_name;
        $data->slug = Str::slug($data->first_name . '' . $data->middle_name . '' . $data->last_name);

        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);

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


        // Student data
        $student = $data->student ?? new Students();
        $student->gender = $request->gender;
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
        $data->assignRole(3);

        // create alert & redirect
        alert()->success('Created', 'Data has been created')->autoclose(1100);
        return redirect('dashboard/students/show/' . User::find($data->id)->id);
    }

    // SHOW VIEW
    public function show($id)
    {
        $data = User::where('id', $id)->first();
        $documents = Documents::where('user_id', $id)->orderBy('title', 'asc')->get();
        $formal_educations = Education::where('user_id', $id)->where('category', 'Formal')->orderBy('year', 'desc')->get();
        $non_formal_educations = Education::where('user_id', $id)->where('category', 'Non Formal')->orderBy('year', 'desc')->get();

        if ($data) {
            return view('dashboard.database.students.show', compact('data', 'documents', 'formal_educations', 'non_formal_educations'))->with('i', (request()->input('page', 1) - 1) * 5);
        } else {
            return redirect('dashboard/students');
        }
    }

    // EDIT VIEW
    public function edit($id)
    {
        $data = User::where('id', $id)->first();

        $documents = Documents::where('user_id', $id)->orderBy('title', 'asc')->get();
        $educations = Education::where('user_id', $id)->orderBy('year', 'asc')->get();
        $provinces = Province::orderBy('name', 'asc')->get();
        $programs = Program::orderBy('program_title', 'asc')->get();

        return view('dashboard.database.students.edit', compact('data', 'documents', 'educations', 'provinces', 'programs'));
    }

    // PROGRAM
    public function programs($id)
    {
        if($id != 'other')
        {
            $datas = ProgramStudent::where('program_id', $id)
            ->leftJoin('students', 'student_program.students_id', '=', 'students.id')
            ->leftJoin('provinces', 'students.province_id', '=', 'provinces.id')
            ->leftJoin('users', 'students.user_id', '=', 'users.id')
            ->orderBy('users.first_name','asc')
            ->get();
        }else{
            $datas = Students::leftJoin('student_program', 'student_program.students_id', '=', 'students.id')
            ->leftJoin('provinces', 'students.province_id', '=', 'provinces.id')
            ->leftJoin('users', 'students.user_id', '=', 'users.id')
            ->orderBy('users.first_name','asc')
            ->whereNull('student_program.students_id')
            ->get();
        }

        // $datas = Program::where('id', $id)->with('students')->paginate(10);
        $program = Program::where('id', $id)->first();

        return view(
            'dashboard.database.students.program',
            compact(
                'datas',
                'program'
            )
        )->with('i', (request()->input('page', 1) - 1) * 10);
    }

      // Provinces
      public function provinces($id)
      {
        if($id != 'other')
        {
            $datas = Students::where('province_id', $id)
                  ->leftJoin('provinces', 'students.province_id', '=', 'provinces.id')
                  ->leftJoin('users', 'students.user_id', '=', 'users.id')
                  ->orderBy('users.first_name','asc')
                  ->get();
        }else{
            $datas = Students::leftJoin('provinces', 'students.province_id', '=', 'provinces.id')
                ->leftJoin('users', 'students.user_id', '=', 'users.id')
                ->orderBy('users.first_name','asc')
                ->whereNull('students.province_id')
                ->get();
        }


            $province = Province::where('id', $id)->first();
            return view(
              'dashboard.database.students.province',
              compact(
                  'datas',
                  'province',
              )
          )->with('i', (request()->input('page', 1) - 1) * 10);
      }

    // UPDATE
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

        // create alert & redirect
        alert()->success('Updated', 'Data has been updated')->autoclose(1100);
        return redirect('dashboard/students/show/' . Students::find($data->id)->id);
    }

    // UPDATE PROFILE
    public function update_profile(Request $request, $id)
    {

        $data = User::find($id);

        $data->first_name = $request->first_name;
        $data->middle_name = $request->middle_name;
        $data->last_name = $request->last_name;
        $data->status = $request->status;

        $data->update();

        $student = $data->student ?? new Students();

        $student->place_of_birth = $request->place_of_birth;
        $student->gender = $request->gender;
        $student->date_of_birth = $request->date_of_birth;

        $data->students()->save($student);

        // create alert & redirect
        alert()->success('Updated', 'Data has been updated')->autoclose(1100);
        return redirect()->back();
    }

    // UPDATE BIOGRAPHY
    public function update_biography(Request $request, $id)
    {

        $data = User::find($id);

        $data->update();

        $student = $data->student ?? new Students();
        $student->profile = $request->profile;

        $data->students()->save($student);

        // create alert & redirect
        alert()->success('Updated', 'Data has been updated')->autoclose(1100);
        return redirect()->back();
    }

    // UPDATE PICTURE
    public function update_picture(Request $request, $id)
    {

        $data = User::find($id);

        // picture creation
        if (isset($request->picture)) {

            $fileName = $request->picture->getClientOriginalName();
            $path = public_path('images/students/' . $data->picture);

            if (file_exists($path)) {
                File::delete($path);
            }

            $data->picture = 'images/students/' . $fileName;
            $request->picture->move(public_path('images/students/'), $fileName);
        }

        // update process
        $data->update();

        // create alert & redirect
        alert()->success('Updated', 'Data has been updated')->autoclose(1100);
        return redirect()->back();
    }

    // UPDATE CONTACT
    public function update_contact(Request $request, $id)
    {

        $data = User::find($id);
        $data->phone = $request->phone;

        $data->update();

        $student = $data->student ?? new Students();

        $student->email_google = $request->email_google;
        $student->email_outlook = $request->email_outlook;
        $student->email_sagu = $request->email_sagu;
        $student->email_campus_1 = $request->email_campus_1;

        $data->students()->save($student);

        // create alert & redirect
        alert()->success('Updated', 'Data has been updated')->autoclose(1100);
        return redirect()->back();
    }

    // UPDATE ADDRESS
    public function update_address(Request $request, $id)
    {

        // select data by id
        $data = User::find($id);

        // update process
        $data->update();

        $student = $data->student ?? new Students();

        $student->province_id = $request->province_id;
        $student->full_address = $request->full_address;

        $data->students()->save($student);

        // create alert & redirect
        alert()->success('Updated', 'Data has been updated')->autoclose(1100);
        return redirect()->back();
    }

    // UPDATE DOCUMENTS
    public function update_documents(Request $request, $id)
    {

        $data = User::find($id);

        $data->update();

        $student = $data->student ?? new Students();

        $student->doc_google_sheets = $request->doc_google_sheets;

        $data->students()->save($student);

        // create alert & redirect
        alert()->success('Updated', 'Data has been updated')->autoclose(1100);
        return redirect()->back();
    }

    // UPDATE PROGRAMS
    public function update_programs(Request $request, $id)
    {

        // select data by id
        $user = User::find($id);

        //get student id
        $student_id = ($user->student->id);

        // delete program student
        $data = ProgramStudent::where('students_id', $student_id);
        $data->delete();

        // Add program student
        if ($request->programs) {
            foreach ($request->programs as $program) {
                $student =  new ProgramStudent();
                $student->program_id = $program;
                $student->students_id = $student_id;
                $student->save();
            }
        }

        // create alert & redirect
        alert()->success('Updated', 'Data has been updated')->autoclose(1100);
        return redirect()->back();
    }

    // UPDATE EDUCATION
    public function update_educations(Request $request, $id)
    {

        // select data by id
        $data = Students::find($id);

        // create new variable
        $data->doc_google_sheets = $request->doc_google_sheets;

        // update process
        $data->update();

        // create alert & redirect
        alert()->success('Updated', 'Data has been updated')->autoclose(1100);
        return redirect()->back();
    }

    // DESTROY OR MOVE TO TRASH
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();

        // create alert & redirect
        alert()->success('Trashed', 'Data has been moved to trash!')->autoclose(1100);
        return redirect()->back();
    }

    // TRASH VIEW
    public function trash()
    {
        $datas = User::onlyTrashed()->paginate(10);

        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::whereHas('roles', function ($q) {
            $q->where('name', 'student');
        })->where('status', 'Draft')->count();
        $datapublish = User::whereHas('roles', function ($q) {
            $q->where('name', 'student');
        })->where('status', 'Publish')->count();

        return view('dashboard.database.students.trash', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // RESTORE
    public function restore($id)
    {
        $data = User::onlyTrashed()->where('id', $id);
        $data->restore();

        // create alert & redirect
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1100);
        return redirect()->back();
    }

    // DELETE PERMANENTLY
    public function delete($id)
    {
        $data = User::onlyTrashed()->findOrFail($id);
        $path = public_path('images/students/' . $data->picture);

        if (file_exists($path)) {
            File::delete($path);
        }
        $data->student->program()->detach();
        $data->forceDelete();

        // create alert & redirect
        alert()->success('Deleted', 'Data dleted permanently!!')->autoclose(1100);
        return redirect()->back();
    }

    // DELETE PROGRAM PERMANENTLY
    public function delete_program($id)
    {
        $data = ProgramStudent::first('id', $id);
        $data->delete();

        // create alert & redirect
        alert()->success('Deleted', 'Data Program has been delete!')->autoclose(1100);
        return redirect()->back();
    }

    public function excel()
    {
        $title = 'student-' . Carbon::now()->isoFormat('D-M-Y') . '.xlsx';
        return Excel::download(new StudentExport, $title);
    }

    public function excel_program($id)
    {
        $program = Program::where('id',$id)->first();
        $program_title = $program->program_title??'Other';
        $title = 'student-' .Str::slug($program_title).'-'. Carbon::now()->isoFormat('D-M-Y') . '.xlsx';
        return Excel::download(new ProgramStudentExport($id), $title);
    }
}
