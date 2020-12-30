<?php

use Illuminate\Support\Facades\Route;
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
    return view('body');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin_dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('role:admin');
Route::get('/seller_dashboard', [App\Http\Controllers\Seller\DashboardController::class, 'index'])->middleware('role:seller');
Route::get('/mylog',function(){
    return view('mylogin');
});