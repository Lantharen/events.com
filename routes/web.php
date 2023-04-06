<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
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


Route::get('/orders/list', [CustomerController::class, 'index'])->name('orders-list.index');
Route::get('/create', [CustomerController::class, 'create'])->name('orders.create');
Route::post('/orders', [CustomerController::class, 'store'])->name('orders.store');


/*Route::get('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::post('/create', [OrderController::class, 'create'])->name('orders.create');
Route::get('/list', [OrderController::class, 'index'])->name('list.index');*/

