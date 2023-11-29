<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class HomeTransactionChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->chart->lineChart()
            ->setTitle('Transactions')
            ->setSubtitle('Earnings vs Expenses')
            ->addData('Expenses', [40, 93, 0, 0, 18, 82])
            ->addData('Earnings', [70, 29, 77, 28, 55, 45])
            ->setXAxis(['2023-11-24', '2023-11-25', '2023-11-26', '2023-11-27', '2023-11-28', '2023-11-29'])
            ->setGrid('#EBECF0', 0.1);
    }
}
