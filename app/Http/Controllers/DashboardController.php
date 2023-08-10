<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Charts\CarConsumptionChart;
use App\Charts\CarUseCountChart;
use Session;



class DashboardController extends Controller
{
    public function dashboard(CarConsumptionChart $CarConsumptionChart, CarUseCountChart $CarUseCountChart)
    {
            return view('dashboard.dashboard', [
                'CarConsumptionChart' => $CarConsumptionChart->build(),
                'CarUseCountChart' => $CarUseCountChart->build()
            ]);
    }

}