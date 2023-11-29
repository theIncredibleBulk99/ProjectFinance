<?php

namespace App\Http\Controllers;
use App\Charts\HomeTransactionChart;
use App\Models\Transaction;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(HomeTransactionChart $chart)
    {
        $recent_transactions = Transaction::orderBy('created_at')->take(3)->get();
        return view('home', [
            'chart' => $chart->build(),
            'data' => $recent_transactions
        ]);
    } 

}
