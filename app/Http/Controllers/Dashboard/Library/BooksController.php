<?php

namespace App\Http\Controllers\Dashboard\Library;

use Illuminate\Support\Str;
use App\Models\Library\Book;
use Illuminate\Http\Request;
use App\Models\Library\Author;
use App\Models\Library\Catagories;
use App\Http\Controllers\Controller;
use App\Models\Library\LoanBook;
use Illuminate\Support\Facades\File;
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
                // 'catagory_id' => 'required',
                'author_id' => 'required',
                'status' => 'required',
                'cover' => 'required|image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'title.required' => 'This is a reaquired field',
                'total.required' => 'This is a reaquired field',
                // 'catagory_id.required' => 'This is a reaquired field',
                'status.required' => 'This is a reaquired field',
                'author_id.required' => 'This is a reaquired field',
                'cover.required' => 'This is a reaquired field',
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
                $data->slug = Str::slug($data->title);

                $data->author_id = $request->author_id;
                $data->catagory_id = $request->catagory_id;
                $data->total = $request->total;
                $data->summary = $request->summary;
                $data->status = $request->status;

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
        // dd('update book');
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                // 'total' => 'required',
                // // 'catagory_id' => 'required',
                // // 'author_id' => 'required',
                // 'status' => 'required',
                // 'cover' => 'required|image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'title.required' => 'This is a reaquired field',
                // 'total.required' => 'This is a reaquired field',
                // // 'catagory_id.required' => 'This is a reaquired field',
                // 'status.required' => 'This is a reaquired field',
                // // 'author_id.required' => 'This is a reaquired field',
                // 'cover.required' => 'This is a reaquired field',
                // 'cover.mimes' => 'Type of this file must be PNG, JPG, JPEG',
                // 'cover.max' => 'Files must be a maximum of 2 MB',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Book::find($id);

                $data->title = $request->title;
                $data->slug = Str::slug($data->title);

                $data->author_id = $request->author_id;
                $data->catagory_id = $request->catagory_id;
                $data->total = $request->total;
                $data->summary = $request->summary;
                $data->status = $request->status;

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

                Alert::toast('Updated! This data has been updated successfully.', 'success');
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
        $bookloan = LoanBook::where('book_id',$id)->where('status','Active')->count();
        $total = Book::where('total')->count();

        $remainingBooks = $bookloan - $total;

        $data = Book::where('id', $id)->first();
        return view('dashboard.library.books.show', compact('data','bookloan','remainingBooks'));
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
    public function destroy($id)
    {
        $data = Book::find($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dashboard.books.trash');
    }
    // TRASH
    public function trash()
    {
        $datas = Book::onlyTrashed()->paginate(10);
        $jumlahtrash = Book::onlyTrashed()->count();
        $jumlahdraft = Book::where('status', 'Draft')->count();
        $datapublish = Book::where('status', 'Publish')->count();
        return view('dashboard.library.books.trash',
        compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // RESTORE
    public function restore($id)
    {
        $data = Book::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }

    // DELETE
    public function delete($id)
    {
        $data = Book::onlyTrashed()->findOrFail($id);
        $path = public_path('images/books/' . $data->cover);

        if (file_exists($path)) {
            File::delete($path);
        }

        $data->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }
}
