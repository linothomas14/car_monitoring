<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function readAll()
    {
        $cars = Car::get();

            return view('cars.cars', ['cars' => $cars]);
    }
}
