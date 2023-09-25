<?php

namespace App\Http\Controllers\Dashboard\Library;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Library\Books;

use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class BooksController extends Controller
{
    // public function index()
    // {
    //     return view('dashboard.library.books.index')->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    // INDEX
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

    // DRAFT
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

    // CREATE
    public function create()
    {
        return view('dashboard.library.books.create');
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                // 'image' => 'image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'title.required' => 'This is a reaquired field',
                // 'image.mimes' => 'Type of this file must be PNG, JPG, JPEG',
                // 'image.max' => 'Files must be a maximum of 2 MB',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new Books();

                $data->title = $request->title;
                $data->status = 'Publish';

                if ($request->image) {
                    $imageName = $data->slug .'-'. time() .'.' . $request->image->extension();
                    $path = public_path('images/books');
                    if (!empty($data->image) && file_exists($path . '/' . $data->image)) :
                        unlink($path . '/' . $data->image);
                    endif;
                    $data->cover = 'images/books/' . $imageName;
                    $request->image->move(public_path('images/books'), $imageName);
                }

                $data->save();

                Alert::toast('Created! This data has been created successfully.', 'success');
                return redirect('dashboard/books/show/' . $data->id);

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($id)
    {
        $data = Books::where('id', $id)->first();
        return view('dashboard.library.books.show', compact('data'));
    }

    // EDIT
    public function edit()
    {
        return view('dashboard.library.books.edit');
    }

    // UPDATE

    // DESTROY

    // TRASH
    public function trash()
    {
        return view('dashboard.library.books.trash');
    }

    // RESTORE

    // DELETE
}
