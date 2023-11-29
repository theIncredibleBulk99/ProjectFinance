<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class TransactionTypeChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chart->donutChart()
            ->setTitle('Transaction Types')
            ->setSubtitle('Earnings vs Expenses')
            ->addData([20, 30])
            ->setLabels(['Expenses', 'Earnings']);
    }
}
