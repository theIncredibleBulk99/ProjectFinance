<?php

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AnalyticsController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home.show');
Route::get('/history', [HistoryController::class, 'index'])->name('history.show');
Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics.show');

Route::middleware(['web'])->group(function () {
    Route::post('/postTransaction', [TransactionController::class, 'createTransaction'])->name('postTransaction');
    Route::get('/getOne/{id}', [TransactionController::class, 'getOne'])->name('getOne');
    Route::get('/getLast7days', [TransactionController::class, 'getLast7Days'])->name('getLast7Days');
    Route::get('/getMonthly/{jenis}/{bulan}', [TransactionController::class, 'getMonthly'])->name('getMonthly');
    Route::get('/getAll/{from}/{to}', [TransactionController::class, 'getAllApi'])->name('getAll');
    Route::get('/postData', function () {
        return view('postData');
    })->name('postData');

    Route::get('/data-json', [nggejson::class, 'getData']);
});

//register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

//login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
