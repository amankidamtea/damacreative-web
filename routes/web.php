<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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
    return view('home');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/detail-produk', function () {
    return view('detailProduk');
});


Route::get('/seller-dashboard', function() {
    return view('admin.admin');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/profile', [DashboardController::class, 'profile'])->middleware('auth');
Route::get('/manageuser', [DashboardController::class, 'manageuser'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication'])->name('login');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::post('/logout', [LoginController::class, 'logout']);
