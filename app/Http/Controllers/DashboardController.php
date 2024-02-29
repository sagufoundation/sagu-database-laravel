<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\User;
use App\Models\Program;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class DashboardController extends Controller
{
    // INDEX
    public function index()
    {
        // By Genders
        $female = Students::whereHas('users', function ($q) {
                        $q->where('status', 'Publish');
                    })->where('gender', 'Female')->count();
        $male = Students::whereHas('users', function ($q) {
                        $q->where('status', 'Publish');
                    })->where('gender', 'Male')->count();

        //  By Programs
        $programs = Program::where([['program_title', '!=', Null]])->where('status', 'Publish')->get();

         //  By Provinces
        $provinces = Province::get();

        if(Auth::user()->hasRole('administrator')){
            return view('dashboard.index',compact(
                'female',
                'male',
                'male',
                'programs',
                'provinces'
            ));

        } elseif(Auth::user()->hasRole('guest')){
            return view('dashboard.index');
        }
        elseif(Auth::user()->hasRole('student')){
            // return view('dashboard.index');
            return redirect('dashboard/books');
        }
        elseif(Auth::user()->hasRole('librarian')) {
            return redirect('dashboard/books');
            // return view('dashboard.index');
        }
        else {
            echo "oops!";
        }
    }
}
