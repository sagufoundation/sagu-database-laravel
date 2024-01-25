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

class StudentsProgramsController extends Controller
{
    // PUBLISH VIEW
    public function index()
    {
        $datas = User::whereHas('roles', function ($q) {
            $q->where('name', 'student');
        })->paginate(10);

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
        )->with('i', (request()->input('page', 1) - 1) * 5);
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
}
