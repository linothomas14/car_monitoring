<?php

namespace App\Http\Controllers;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Http\Request;

use App\Exports\RentExport;
use Maatwebsite\Excel\Facades\Excel;
use Auth;


class ApprovalController extends Controller
{
    public function readAll()
    {
        $id_user = Auth::user()->id;
        $role_user = Auth::user()->role;
        if ($role_user == 'admin'){
            $approvals = Rent::with('driver', 'car', 'approver')->get();
        } else {
            $approvals = Rent::with('driver', 'car', 'approver')->where('boss_id', $id_user)->get();
        }
        
        
        
            return view('approvals.approvals', ['approvals' => $approvals]);
    }

    public function approved($id){
        Rent::where('id', $id)->update(['approved' => 1]);
        return redirect('/approvals');
    }

    public function export_excel()
	{
		return Excel::download(new RentExport, 'approvals.xlsx', \Maatwebsite\Excel\Excel::XLSX, [
            'Content-Disposition' => 'attachment; filename="approvals.xlsx"',
            'headers' => [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            ],
        ]);

        
	}
}
