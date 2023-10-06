<?php

namespace App\Http\Controllers\Dashboard\Library;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Library\Author;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AuthorsController extends Controller
{
    public function index()
    {
        $datas = Author::where([
            ['name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->orderBy('name', 'asc')->paginate(10);

        $jumlahtrash = Author::onlyTrashed()->count();
        $jumlahdraft = Author::where('status', 'Draft')->count();
        $datapublish = Author::where('status', 'Publish')->count();

        return view('dashboard.library.authors.index',
        compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // DRAFT
    public function draft()
    {
        $datas = Author::where([
            ['name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->orderBy('name', 'asc')->paginate(10);

        $jumlahtrash = Author::onlyTrashed()->count();
        $jumlahdraft = Author::where('status', 'Draft')->count();
        $datapublish = Author::where('status', 'Publish')->count();


        return view('dashboard.library.authors.index',
        compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {
        return view('dashboard.library.authors.create');
    }

     // STORE
     public function store(Request $request)
     {
         $validator = Validator::make(
             $request->all(),
             [
                 'name' => 'required',
                 'status' => 'required',
             ],
             [
                 'name.required' => 'This is a reaquired field',
                 'status.required' => 'This is a reaquired field',
             ]
         );

         if ($validator->fails()) {
             return redirect()->back()->withInput($request->all())->withErrors($validator);
         } else {
             try {
                 $data = new Author();
                 $data->name = $request->name;
                 $data->status = $request->status;
                 $data->slug = Str::slug($data->name);
                 $data->save();

                 Alert::toast('Created! This data has been created successfully.', 'success');
                 return redirect('dashboard/authors/show/' . $data->id);

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
                 'name' => 'required',
                 'status' => 'required',
             ],
             [
                 'name.required' => 'This is a reaquired field',
                 'status.required' => 'This is a reaquired field',
             ]
         );

         if ($validator->fails()) {
             return redirect()->back()->withInput($request->all())->withErrors($validator);
         } else {
             try {
                 $data = Author::find($id);
                 $data->name = $request->name;
                 $data->status = $request->status;
                 $data->slug = Str::slug($data->name);
                 $data->update();

                 Alert::toast('Created! This data has been updateds successfully.', 'success');
                 return redirect('dashboard/authors/show/' . $data->id);

             } catch (\Throwable $th) {
                 Alert::toast('Failed! Something is wrong', 'error');
                 return redirect()->back();
             }
         }
     }

     // SHOW
    public function show($id)
    {
        $data = Author::where('id', $id)->first();
        return view('dashboard.library.authors.show', compact('data'));
    }

    // EDIT
    public function edit($id)
    {
        $data = Author::where('id', $id)->first();
        return view('dashboard.library.authors.edit',compact('data'));
    }

     // DESTROY
     public function destroy($id)
     {
         $data = Author::find($id);
         $data->delete();
         alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
         return redirect()->route('dashboard.authors.trash');
     }
      // TRASH
    public function trash()
    {
        $datas = Author::onlyTrashed()->paginate(10);
        $jumlahtrash = Author::onlyTrashed()->count();
        $jumlahdraft = Author::where('status', 'Draft')->count();
        $datapublish = Author::where('status', 'Publish')->count();
        return view('dashboard.library.authors.trash',
        compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // RESTORE
    public function restore($id)
    {
        $data = Author::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }
    // DELETE
    public function delete($id)
    {
        $data = Author::onlyTrashed()->findOrFail($id);
        $data->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->back();
    }

}
