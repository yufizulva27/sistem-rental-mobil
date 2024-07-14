<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarDetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataMobilController;
use App\Http\Controllers\DataSewaController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\FormPendaftaranController;
use App\Http\Controllers\KwitansiController;
use App\Http\Controllers\LaporanDataSewaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenyewaController;
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

Route::get('/registrasi', [RegisterController::class, 'index'])->name('register');
Route::post('/registrasi', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard/dataSewa', [DataSewaController::class, 'index'])->name('dashboard.dataSewa.index');
Route::get('/dashboard/dataSewa/{id}/edit', [DataSewaController::class, 'edit'])->name('dashboard.dataSewa.edit');
Route::put('/dashboard/dataSewa/{id}', [DataSewaController::class, 'update'])->name('dashboard.dataSewa.update');
Route::get('/dashboard/dataSewa/{id}', [DataSewaController::class, 'show'])->name('dashboard.dataSewa.show');
Route::get('/dashboard/dataSewa/{id}/print', [DataSewaController::class, 'printKwitansi'])->name('dashboard.dataSewa.print');


// Route::get('/dashboard/kwitansi', [KwitansiController::class, 'index']);
Route::get('/dashboard/laporanDataSewa', [LaporanDataSewaController::class, 'index']);

Route::get('/dashboard/suratJalan', [SuratJalanController::class, 'index'])->name('dashboard.suratJalan.index');
Route::get('/dashboard/suratJalan/{id}', [SuratJalanController::class, 'show'])->name('dashboard.suratJalan.show');
Route::post('/dashboard/suratJalan/search', [SuratJalanController::class, 'search'])->name('dashboard.suratJalan.search');


Route::get('/dashboard/dataDriver', [DriverController::class, 'index'])->name('dashboard.dataDriver.index');
Route::get('/dashboard/dataDriver/create', [DriverController::class, 'create'])->name('dashboard.dataDriver.create');
Route::post('/dashboard/dataDriver/store', [DriverController::class, 'store'])->name('dashboard.dataDriver.store');
Route::get('/dashboard/dataDriver/{id}/edit', [DriverController::class, 'edit'])->name('dashboard.dataDriver.edit');
Route::put('/dashboard/dataDriver/{id}', [DriverController::class, 'update'])->name('dashboard.dataDriver.update');;
Route::delete('/dashboard/dataDriver/{id}', [DriverController::class, 'destroy'])->name('dashboard.dataDriver.destroy');

Route::get('/dashboard/dataMobil', [DataMobilController::class, 'index'])->name('dashboard.dataMobil.index');
Route::get('/dashboard/dataMobil/create', [DataMobilController::class, 'create'])->name('dashboard.dataMobil.create');
Route::post('/dashboard/dataMobil/store', [DataMobilController::class, 'store'])->name('dashboard.dataMobil.store');
Route::get('/dashboard/dataMobil/{id}/edit', [DataMobilController::class, 'edit'])->name('dashboard.dataMobil.edit');
Route::put('/dashboard/dataMobil/{id}', [DataMobilController::class, 'update'])->name('dashboard.dataMobil.update');
Route::delete('/dashboard/dataMobil/{id}', [DataMobilController::class, 'destroy'])->name('dashboard.dataMobil.destroy');

Route::get('/dashboard/dataPenyewa', [PenyewaController::class, 'index'])->name('dashboard.dataPenyewa.index');
Route::get('/dashboard/dataPenyewa/create', [PenyewaController::class, 'create'])->name('dashboard.dataPenyewa.create');
Route::post('/dashboard/dataPenyewa/store', [PenyewaController::class, 'store'])->name('dashboard.dataPenyewa.store');
Route::get('/dashboard/dataPenyewa/{id}/edit', [PenyewaController::class, 'edit'])->name('dashboard.dataPenyewa.edit');
Route::put('/dashboard/dataPenyewa/{id}', [PenyewaController::class, 'update'])->name('dashboard.dataPenyewa.update');;
Route::delete('/dashboard/dataPenyewa/{id}', [PenyewaController::class, 'destroy'])->name('dashboard.dataPenyewa.destroy');


Route::get('/', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');
Route::post('/cars/bookNow', [CarController::class, 'bookNow'])->name('cars.bookNow');
Route::post('/cars/completeBooking', [CarController::class, 'completeBooking'])->name('cars.completeBooking');


Route::get('/dashboard/account', [AccountController::class, 'index'])->name('dashboard.account.index');

Route::get('/dashboard/account/create', [AccountController::class, 'create'])->name('dashboard.account.create');
Route::post('/dashboard/account/store', [AccountController::class, 'store'])->name('dashboard.account.store');
Route::get('/dashboard/account/{id}/edit', [AccountController::class, 'edit'])->name('dashboard.account.edit');
Route::put('/dashboard/account/{id}', [AccountController::class, 'update'])->name('dashboard.account.update');;
Route::delete('/dashboard/account/{id}', [AccountController::class, 'destroy'])->name('dashboard.account.destroy');