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

        } elseif(Auth::user()->hasRole('guest')){
            return view('dasbor.index');

        } else {
            echo "oops!";
        }
    }
}
