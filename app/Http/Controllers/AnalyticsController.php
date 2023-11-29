<?php

namespace App\Http\Controllers;
use App\Charts\HomeTransactionChart;
use App\Charts\TransactionTypeChart;
use App\Charts\RecipientChart;
use App\Charts\AreaChart;

use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function index(HomeTransactionChart $chart1, TransactionTypeChart $chart2, RecipientChart $chart3)
    {
        return view('chart', [
            'line_chart' => $chart1->build(),
            'donut_chart' => $chart2->build(),
            'bar_chart' => $chart3->build(),
        ]);
    } 
}
