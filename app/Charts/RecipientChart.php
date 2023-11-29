<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class RecipientChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
            ->setTitle('Recipients')
            ->setSubtitle('Count Total')
            ->addData('', [6, 9, 3])
            ->setXAxis(['Recipient 1', 'Recipient 2', 'Recipient 3'])
            ->setGrid('#EBECF0', 0.1);
    }
}
