<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class DasborController extends Controller
{
    // INDEX
    public function index()
    {
        if(Auth::user()->hasRole('administrator')){
            return view('dasbor.index');

        } elseif(Auth::user()->hasRole('author')){
            return view('dasbor.index');

        } elseif(Auth::user()->hasRole('editor')){
            return view('dasbor.index');
        }
        elseif(Auth::user()->hasRole('supervisor')){
            return view('dasbor.index');
        }
    }
}
