<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/create', [ProductController::class, 'create'])->name('product/dashboard');
Route::get('/product/admin', [ProductController::class, 'dashboardAdmin'])->name('product/admin_dashboard')->middleware("auth");
Route::get('/product/manager', [ProductController::class, 'dashboardManager'])->name('product/manager_dashboard');
Route::get('/product/customer', [ProductController::class, 'dashboardCustomer'])->name('product/customer_dashboard');
Route::get('/product/product', [ProductController::class, 'dashboardProduct'])->name('product/product_dashboard');
Route::get('/product/customer', [ProductController::class, 'customerCreate'])->name('product/customer_dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
