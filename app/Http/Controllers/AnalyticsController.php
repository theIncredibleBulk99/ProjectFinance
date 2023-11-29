<?php

namespace App\Http\Controllers;
use App\Charts\HomeTransactionChart;

use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function index(HomeTransactionChart $chart)
    {
        return view('chart', [
            'chart' => $chart->build()
        ]);
    } 
}
