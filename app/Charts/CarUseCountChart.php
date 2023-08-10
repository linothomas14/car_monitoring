<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Rent;

class CarUseCountChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {

        $carModelCounts = Rent::join('cars', 'rents.car_id', '=', 'cars.id')
            ->selectRaw('cars.model, COUNT(*) as count')
            ->groupBy('cars.model')
            ->orderByDesc('count')
            ->get();

        $countArray = [];
        $carModelArray = [];
        
        foreach ($carModelCounts as $carModelCount) {
            $carModelArray[] = $carModelCount->model;
            $countArray[] = $carModelCount->count;
        }


        return $this->chart->barChart()
            ->setTitle('Car Used Count')
            ->setHeight(300)
            ->setWidth(300)
            ->addData('Car Used Count', $countArray)
            ->setXAxis($carModelArray);
    }
}
