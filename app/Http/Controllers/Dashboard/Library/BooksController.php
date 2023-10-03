<?php

namespace App\Http\Controllers\Dashboard\Library;

use Illuminate\Support\Str;
use App\Models\Library\Book;
use Illuminate\Http\Request;
use App\Models\Library\Author;
use App\Models\Library\Catagories;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class BooksController extends Controller
{

    public function index()
    {
        $datas = Book::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->orderBy('title', 'asc')->paginate(10);
        $jumlahtrash = Book::onlyTrashed()->count();
        $jumlahdraft = Book::where('status', 'Draft')->count();
        $datapublish = Book::where('status', 'Publish')->count();

        return view('dashboard.library.books.index',
                compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // DRAFT
    public function draft()
    {
        $datas = Book::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->orderBy('title', 'asc')->paginate(10);
        $jumlahtrash = Book::onlyTrashed()->count();
        $jumlahdraft = Book::where('status', 'Draft')->count();
        $datapublish = Book::where('status', 'Publish')->count();

        return view('dashboard.library.books.index',
            compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {
        $authors = Author::all();
        $categories = Catagories::all();

        return view('dashboard.library.books.create',compact('authors','categories'));
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'total' => 'required',
                'catagory_id' => 'required',
                'author_id' => 'required',
                'status' => 'required',
                'cover' => 'image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'title.required' => 'This is a reaquired field',
                'total.required' => 'This is a reaquired field',
                'catagory_id.required' => 'This is a reaquired field',
                'status.required' => 'This is a reaquired field',
                'author_id.required' => 'This is a reaquired field',
                'cover.mimes' => 'Type of this file must be PNG, JPG, JPEG',
                'cover.max' => 'Files must be a maximum of 2 MB',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new Book();

                $data->title = $request->title;
                $data->status = $request->status;
                $data->slug = Str::slug($data->title);
                $data->total = $request->total;
                $data->author_id = $request->author_id;
                $data->catagory_id = $request->catagory_id;

                if ($request->cover) {
                    $imageName = $data->slug .'-'. time() .'.' . $request->cover->extension();
                    $path = public_path('images/books');
                    if (!empty($data->cover) && file_exists($path . '/' . $data->cover)) :
                        unlink($path . '/' . $data->cover);
                    endif;
                    $data->cover = 'images/books/' . $imageName;
                    $request->cover->move(public_path('images/books'), $imageName);
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
    // UPDATE
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'total' => 'required',
                'catagory_id' => 'required',
                'author_id' => 'required',
                'status' => 'required',
                'cover' => 'image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'title.required' => 'This is a reaquired field',
                'total.required' => 'This is a reaquired field',
                'catagory_id.required' => 'This is a reaquired field',
                'status.required' => 'This is a reaquired field',
                'author_id.required' => 'This is a reaquired field',
                'cover.mimes' => 'Type of this file must be PNG, JPG, JPEG',
                'cover.max' => 'Files must be a maximum of 2 MB',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Book::find($id);

                $data->title = $request->title;
                $data->status = $request->status;
                $data->slug = Str::slug($data->title);
                $data->total = $request->total;
                $data->author_id = $request->author_id;
                $data->catagory_id = $request->catagory_id;

                if ($request->cover) {
                    $imageName = $data->slug .'-'. time() .'.' . $request->cover->extension();
                    $path = public_path('images/books');
                    if (!empty($data->cover) && file_exists($path . '/' . $data->cover)) :
                        unlink($path . '/' . $data->cover);
                    endif;
                    $data->cover = 'images/books/' . $imageName;
                    $request->cover->move(public_path('images/books'), $imageName);
                }

                $data->update();

                Alert::toast('Created! This data has been updated successfully.', 'success');
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
        $data = Book::where('id', $id)->first();


        return view('dashboard.library.books.show', compact('data'));
    }

    // EDIT
    public function edit($id)
    {
        $authors = Author::all();
        $categories = Catagories::all();
        $data = Book::where('id', $id)->first();
        return view('dashboard.library.books.edit',compact('data','authors','categories'));
    }



    // DESTROY

    // TRASH
    public function trash()
    {
        return view('dashboard.library.books.trash');
    }

    // RESTORE

    // DELETE
}
