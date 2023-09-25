<?php

namespace App\Http\Controllers\Dashboard\Library;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Library\Books;

class BooksController extends Controller
{
    // public function index()
    // {
    //     return view('dashboard.library.books.index')->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    public function index()
    {
        $datas = Books::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('middle_name', 'LIKE', '%' . $s . '%')
                        // ->orWhere('last_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->orderBy('title', 'asc')->paginate(10);
        $jumlahtrash = Books::onlyTrashed()->count();
        $jumlahdraft = Books::where('status', 'Draft')->count();
        $datapublish = Books::where('status', 'Publish')->count();

        return view('dashboard.library.books.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function draft()
    {
        $datas = Books::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('middle_name', 'LIKE', '%' . $s . '%')
                        // ->orWhere('last_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->orderBy('title', 'asc')->paginate(10);
        $jumlahtrash = Books::onlyTrashed()->count();
        $jumlahdraft = Books::where('status', 'Draft')->count();
        $datapublish = Books::where('status', 'Publish')->count();

        return view('dashboard.library.books.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
