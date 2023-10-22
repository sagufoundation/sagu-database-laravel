<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class DashboardController extends Controller
{
    // INDEX
    public function index()
    {
        if(Auth::user()->hasRole('administrator')){
            return view('dashboard.index');

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
