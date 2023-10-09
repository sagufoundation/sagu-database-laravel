<?php

namespace App\Http\Controllers\Dashboard\Library;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Library\Catagories;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    public function index()
    {
        $datas = Catagories::where([
            ['name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->orderBy('name', 'asc')->paginate(10);

        $jumlahtrash = Catagories::onlyTrashed()->count();
        $jumlahdraft = Catagories::where('status', 'Draft')->count();
        $datapublish = Catagories::where('status', 'Publish')->count();

        return view('dashboard.library.categories.index',
        compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // DRAFT
    public function draft()
    {
        $datas = Catagories::where([
            ['name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->orderBy('name', 'asc')->where('status','draft')->paginate(10);

        $jumlahtrash = Catagories::onlyTrashed()->count();
        $jumlahdraft = Catagories::where('status', 'Draft')->count();
        $datapublish = Catagories::where('status', 'Publish')->count();


        return view('dashboard.library.categories.index',
        compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {
        return view('dashboard.library.categories.create');
    }

     // STORE
     public function store(Request $request)
     {
         $validator = Validator::make(
             $request->all(),
             [
                 'name' => 'required',
                //  'status' => 'required',
             ],
             [
                 'name.required' => 'This is a reaquired field',
                //  'status.required' => 'This is a reaquired field',
             ]
         );

         if ($validator->fails()) {
             return redirect()->back()->withInput($request->all())->withErrors($validator);
         } else {
             try {
                 $data = new Catagories();

                 $data->name = $request->name;
                 $data->slug = Str::slug($data->name);

                 $data->description = $request->description;
                 $data->status = $request->status;

                 $data->save();

                 Alert::toast('Created! This data has been created successfully.', 'success');
                 return redirect('dashboard/categories/show/' . $data->id);

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
                //  'status' => 'required',
             ],
             [
                 'name.required' => 'This is a reaquired field',
                //  'status.required' => 'This is a reaquired field',
             ]
         );

         if ($validator->fails()) {
             return redirect()->back()->withInput($request->all())->withErrors($validator);
         } else {
             try {
                 $data = Catagories::find($id);
                 
                 $data->name = $request->name;
                 $data->slug = Str::slug($data->name);
                 $data->description = $request->description;
                 $data->status = $request->status;

                 $data->update();

                 Alert::toast('Updated! This data has been updated successfully.', 'success');
                 return redirect('dashboard/categories/show/' . $data->id);

             } catch (\Throwable $th) {
                 Alert::toast('Failed! Something is wrong', 'error');
                 return redirect()->back();
             }
         }
     }

     // SHOW
    public function show($id)
    {
        $data = Catagories::where('id', $id)->first();
        return view('dashboard.library.categories.show', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // EDIT
    public function edit($id)
    {
        $data = Catagories::where('id', $id)->first();
        return view('dashboard.library.categories.edit',compact('data'));
    }

     // DESTROY
     public function destroy($id)
     {
         $data = Catagories::find($id);
         $data->delete();
         alert()->success('Trashed', 'Data has been movet to trash!')->autoclose(1100);
         return redirect()->route('dashboard.categories.trash');
     }
      // TRASH
    public function trash()
    {
        $datas = Catagories::onlyTrashed()->paginate(10);
        $jumlahtrash = Catagories::onlyTrashed()->count();
        $jumlahdraft = Catagories::where('status', 'Draft')->count();
        $datapublish = Catagories::where('status', 'Publish')->count();
        return view('dashboard.library.categories.trash',
        compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // RESTORE
    public function restore($id)
    {
        $data = Catagories::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Restored', 'Data has been resotred!')->autoclose(1100);
        return redirect()->back();
    }
    // DELETE
    public function delete($id)
    {
        $data = Catagories::onlyTrashed()->findOrFail($id);
        $data->forceDelete();
        alert()->success('Deleted', 'Data has been deleted permanently!')->autoclose(1100);
        return redirect()->back();
    }

}

