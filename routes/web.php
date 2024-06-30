<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataSewaController;
use App\Http\Controllers\KwitansiController;
use App\Http\Controllers\LaporanDataSewaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SuratJalanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/registrasi', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/dataSewa', [DataSewaController::class, 'index']);
Route::get('/dashboard/kwitansi', [KwitansiController::class, 'index']);
Route::get('/dashboard/laporanDataSewa', [LaporanDataSewaController::class, 'index']);
Route::get('/dashboard/suratJalan', [SuratJalanController::class, 'index']);
