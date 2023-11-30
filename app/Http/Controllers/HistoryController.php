<?php

namespace App\Http\Controllers;
use App\Models\Transaction;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index() {
        return response()->redirectToRoute('getAll',['from'=> '2023-4-5','to'=>'2024-1-4']);
}
}
