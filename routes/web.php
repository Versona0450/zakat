<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MuzaqiController;
use App\Http\Controllers\AmilinController;
use App\Http\Controllers\ZakatController;
use App\Http\Controllers\MustahiqController;


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

Route::get('/', [MainController::class, 'dashboard'])->name('zakat.dashboard');

Route::get('/zakat', [MainController::class, 'index'])->name('zakat.index');
Route::get('/harga', [MainController::class, 'harga'])->name('zakat.harga');

// ZAKAT

// MUZAQI

Route::get('muzaqi/print', [MuzaqiController::class, 'print'])->name('mprint');
Route::get('muzaqi/pembagian', [MuzaqiController::class, 'pembagian'])->name('pembagian');
Route::resource('muzaqi', MuzaqiController::class);



// MUSTAHIQ
Route::resource('mustahiq', MustahiqController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

