<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Car;

class CarConsumptionChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $carsData = Car::orderBy('fuel_consumption', 'desc')->get(['model', 'fuel_consumption']);
        $cars_model = $carsData->pluck('model')->toArray();
        $cars_consumption = $carsData->pluck('fuel_consumption')->toArray();
        
        return $this->chart->barChart()
            ->setTitle('Fuel Consumption')
            ->setHeight(300)
            ->setWidth(300)
            ->addData('Fuel Consumption(L)', $cars_consumption)
            ->setXAxis($cars_model);
    }
}
