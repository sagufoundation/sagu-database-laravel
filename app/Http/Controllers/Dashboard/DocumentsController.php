<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\Documents;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DocumentsController extends Controller
{

    // STORE
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'url' => 'required',
        ],
        [
            'title.required' => 'This is a reaquired field',
            'url.required' => 'This is a reaquired field',
        ]);

        $data = new Documents();

        $data->user_id = $request->user_id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->url = $request->url;

        $data->save();

        // create alert & redirect
        Alert::toast('Created! This data has been created successfully.', 'success');
        return redirect('dashboard/students/show/' . $data->user_id);

    }

    public function destroy($id)
    {
        Documents::where('id', $id)->delete();

        // create alert & redirect
        alert()->success('Deleted', 'Data dleted permanently!!')->autoclose(1100);
        return redirect()->back();
    }

}