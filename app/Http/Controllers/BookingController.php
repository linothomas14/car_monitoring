<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
use App\Models\Driver;
use App\Models\Rent;

class BookingController extends Controller
{
    public function add()
    {
        $cars = Car::get();
        $drivers = Driver::get();
        $approvers = User::where('role', 'boss')->get();

            return view('bookings.input_booking', ['cars' => $cars, 'drivers' => $drivers, 'approvers' => $approvers]);
    }

    public function save(Request $request)
    {
        
        Rent::create([
            'car_id' => $request->car,
            'driver_id' => $request->driver,
            'boss_id' => $request->approver,
            'usage_date'=> $request->usage_date,

        ]);

        return redirect('/approvals');
    }
}
