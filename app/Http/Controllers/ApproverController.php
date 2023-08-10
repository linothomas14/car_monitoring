<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ApproverController extends Controller
{
    public function readAll()
    {

        
        $approvers = User::where('role', 'boss')->get();

            return view('approvers.approvers', ['approvers' => $approvers]);
    }

    public function add()
    {   
        return view('approvers.input_approver');
    }

    public function save(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'boss'

        ]);

        return redirect('/approvers');
    }
}
