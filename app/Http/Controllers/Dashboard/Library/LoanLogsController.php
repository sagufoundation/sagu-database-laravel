<?php

namespace App\Http\Controllers\Dashboard\Library;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Students;
use App\Models\Library\Books;
use App\Models\Library\Loan_logs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanLogsController extends Controller
{    


    // USER AREA
    
    public function loanLogs()
    {
        $datas = Loan_logs::where('user_id', Auth::user()->id)->paginate();
        $adminDatas = Loan_logs::get();

        return view('dashboard.library.loan-logs.index', compact('datas', 'adminDatas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {

        $data = new Loan_logs();

        // buat variabel baru
        $data->user_id = $request->user_id;
        $data->book_id = $request->book_id;

        $data->status = 'Pending';

        // proses simpan
        $data->save();

        // menampilkan notifikasi alert
        alert()->success('Success', 'Data has been added')->autoclose(1100);

        // mengalihkan halaman
        return redirect('dashboard/books/loan-logs');

    }

    // EDIT
    public function edit($id)
    {
        $data = Loan_logs::where('id', $id)->first();
        return view('dashboard.library.loan-logs.edit', compact('data'));
    }

    // UPDATE 
    public function update(Request $request, $id)
    {
        

        // select data by id
        $data = Loan_logs::find($id);
        $data->return_date = $request->return_date;

        // update process
        $data->update();

        // create alert
        alert()->success('Updated', 'Data has been updated!')->autoclose(1100);

        // redirect page
        return redirect()->back();
    }

    public function orderByUser_confirmByAdmin()
    {

    }

    public function return()
    {

    }

    
    // FORCE DELETE
    public function delete($id)
    {
        $data = Loan_logs::first();
        $data->forceDelete();
        alert()->success('Deleted', 'Data has been deleted!')->autoclose(1100);
        return redirect()->back();
    }
}
