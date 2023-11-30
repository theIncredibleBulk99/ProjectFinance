<?php

use App\Http\Controllers\TransactionController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\nggejson;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.show');
Route::get('/history', [HistoryController::class, 'index'])->name('history.show');
Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics.show');

Route::get('chart', function () {
    $chart = (new LarapexChart)::setType('line')
        ->setTitle('Summary.')
        ->setSubtitle('Income vs Expenses.')
        ->setDataset([
            [
                'data' => [40, 93, 35, 42, 18, 82, 100]
            ],
            [
                'data' => [50, 43, 75, 41, 38, 52, 90]
            ]
        ])
        ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June', 'July'])
        ->setColors(['#ffc73c', '#f5746f']);
    return view('chart', compact('chart'));
});

Route::middleware(['web'])->group(function () {
    Route::post('/postTransaction', [TransactionController::class, 'postTransactionApi'])->name('postTransaction');
    Route::get('/getOne/{id}', [TransactionController::class, 'getOneApi'])->name('getOne');
    Route::get('/getLast7days', [TransactionController::class, 'getLast7Days'])->name('getLast7Days');
    Route::get('/getMonthly/{jenis}/{bulan}', [TransactionController::class, 'getMonthly'])->name('getMonthly');
    Route::get('/getAll/{from}/{to}', [TransactionController::class, 'getAllApi'])->name('getAll');
    Route::get('/postData', function () {
        return view('postData');
    })->name('postData');

    Route::get('/data-json', [nggejson::class, 'getData']);
    Route::get('/login', function(){
        return view('login');
    })->name('loginPage');
Route::post('/login', [LoginController::class, 'login'])->name('login');

});

//register
Route::get('/register', function(){
    return view('register');
})->name('registerPage');
Route::post('/register', [RegisterController::class, 'register'])->name('register');


