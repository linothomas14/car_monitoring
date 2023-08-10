<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

use App\Models\Driver;
use Illuminate\Support\Facades\DB;



class DriverController extends Controller
{
    public function readAll()
    {
        $drivers = Driver::get();

            return view('drivers.drivers', ['drivers' => $drivers]);
    }

    // public function update()
    // {
    //         return view('drivers.drivers');
    // }

    // public function delete($id){
    //     // Cari artikel terkait lalu delete
    //     Artikel::find($id)->delete(); 
    //     return redirect('/artikel'); 
    // }

}