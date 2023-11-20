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
        $datas = User::whereHas('roles',function($q){
            $q->where('name','student');
        })->paginate(10);

        $jumlahtrash = User::onlyTrashed()->count();

        $jumlahdraft = User::whereHas('roles',function($q){$q->where('name','student');})->where('status', 'Draft')->count();
        $datapublish = User::whereHas('roles',function($q){$q->where('name','student');})->where('status', 'Publish')->count();

        return view('dashboard.database.students.index',
               compact(
                'datas',
                'jumlahtrash',
                'jumlahdraft',
                'datapublish'
            ))->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
