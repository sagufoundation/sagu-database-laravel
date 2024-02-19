<?php

namespace App\Http\Controllers\Dashboard\Library;

use App\Models\User;

use App\Models\Students;
use Illuminate\Http\Request;
use App\Models\Library\Books;
use App\Models\Library\LoanBook;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoanLogsController extends Controller
{


    // ACTIVE
    public function loanLogs()
    {
        $datas = LoanBook::where('user_id', Auth::user()->id)->where('status', 'Active')->paginate();

        $totalActive = LoanBook::where('user_id', Auth::user()->id)->where('status', 'Active')->count();
        $totalPending = LoanBook::where('user_id', Auth::user()->id)->where('status', 'Pending')->count();
        $totalReturned = LoanBook::where('user_id', Auth::user()->id)->where('status', 'Returned')->count();

        $adminDatas = LoanBook::where('status', 'Active')->paginate();

        $adminTotalActive = LoanBook::where('status', 'Active')->count();
        $adminTotalPending = LoanBook::where('status', 'Pending')->count();
        $adminTotalReturned = LoanBook::where('status', 'Returned')->count();

        return view('dashboard.library.loan-logs.index', compact(
            'datas',
            'adminDatas',
            'totalActive',
            'totalPending',
            'totalReturned',
            'adminTotalActive',
            'adminTotalPending',
            'adminTotalReturned',
            ))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // PENDING
    public function loanLogsPending()
    {
        $datas = LoanBook::where('user_id', Auth::user()->id)->where('status', 'Pending')->paginate();
        $totalActive = LoanBook::where('user_id', Auth::user()->id)->where('status', 'Active')->count();
        $totalPending = LoanBook::where('user_id', Auth::user()->id)->where('status', 'Pending')->count();
        $totalReturned = LoanBook::where('user_id', Auth::user()->id)->where('status', 'Returned')->count();

        $adminDatas = LoanBook::where('status', 'Pending')->paginate();

        $adminTotalActive = LoanBook::where('status', 'Active')->count();
        $adminTotalPending = LoanBook::where('status', 'Pending')->count();
        $adminTotalReturned = LoanBook::where('status', 'Returned')->count();

        return view('dashboard.library.loan-logs.index', compact(
            'datas',
            'adminDatas',
            'totalActive',
            'totalPending',
            'totalReturned',
            'adminTotalActive',
            'adminTotalPending',
            'adminTotalReturned',
            ))->with('i', (request()->input('page', 1) - 1) * 10);
    }



    // RETURNED
    public function loanLogsReturned()
    {
        $datas = LoanBook::where('user_id', Auth::user()->id)->where('status', 'Returned')->paginate();
        $totalActive = LoanBook::where('user_id', Auth::user()->id)->where('status', 'Active')->count();
        $totalPending = LoanBook::where('user_id', Auth::user()->id)->where('status', 'Pending')->count();
        $totalReturned = LoanBook::where('user_id', Auth::user()->id)->where('status', 'Returned')->count();

        $adminDatas = LoanBook::where('status', 'Returned')->paginate();

        $adminTotalActive = LoanBook::where('status', 'Active')->count();
        $adminTotalPending = LoanBook::where('status', 'Pending')->count();
        $adminTotalReturned = LoanBook::where('status', 'Returned')->count();

        return view('dashboard.library.loan-logs.index', compact(
            'datas',
            'adminDatas',
            'totalActive',
            'totalPending',
            'totalReturned',
            'adminTotalActive',
            'adminTotalPending',
            'adminTotalReturned',
            ))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function store(Request $request)
    {

        $data = new LoanBook();

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
        $data = LoanBook::where('id', $id)->first();
        return view('dashboard.library.loan-logs.edit', compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {


        // select data by id
        $data = LoanBook::find($id);
        $data->return_date = $request->return_date;
        $data->status = $request->status;
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
        // dd($id);
        $data = LoanBook::where('id',$id);


        $data->forceDelete();
        alert()->success('Deleted', 'Data has been deleted!')->autoclose(1100);
        return redirect()->back();
    }
}
