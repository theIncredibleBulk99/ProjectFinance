<?php

use App\Http\Controllers\TransactionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['web'])->group(function () {
    Route::post('/postTransaction', [TransactionController :: class, 'createTransaction'])->name('postTransaction');
    Route::get('/getOne/{id}', [TransactionController :: class,'getOne'])->name('getOne');
    Route::get('/getLast7days', [TransactionController :: class,'getLast7Days'])->name('getLast7Days');
    Route::get('/getMonthly/{jenis}/{bulan}', [TransactionController :: class,'getMonthly'])->name('getMonthly');
    Route::get('/getAll', [TransactionController :: class,'getAll'])->name('getAll');
    Route::get('/postData', function () {
        return view('postData');
    })->name('postData');
});


