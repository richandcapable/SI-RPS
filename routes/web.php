<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\PengesahanController;

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

// route tampilan awal (home)
Route::get('', [HomeController::class, 'index']);
// route prodi
Route::get('elektro', [HomeController::class, 'elektro']);

// route TI
Route::get('elektro/informatika', [HomeController::class, 'informatika']);
Route::get('elektro/informatika/semester-1', [HomeController::class, 'semester1ti']);

// route SIKC
Route::get('elektro/sikc', [HomeController::class, 'sikc']);
Route::get('elektro/sikc/semester-1', [HomeController::class, 'semester1sikc']);

Route::middleware(['guest'])->group(function() {
    // route login
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::middleware(['auth'])->group(function() {
    // route tampilan admin, kaprodi, kajur
    Route::get('dashboard', [DashboardController::class, 'index']);
    
    // menu admin
    Route::get('input', [InputController::class, 'index'])->name('input');
    Route::get('tambah', [InputController::class, 'create'])->name('tambah');
    Route::post('simpan', [InputController::class, 'store'])->name('simpan');
    Route::get('edit/{id_rps}', [InputController::class, 'edit'])->name('edit');
    Route::put('/data/{id}', [InputController::class, 'update'])->name('data.update');
    Route::get('hapus/{id_rps}', [InputController::class, 'destroy'])->name('hapus');
    
    //  menu kaprodi (perbaikan di status)
    Route::get('pengesahan', [PengesahanController::class, 'index']);
    Route::get('setuju/{id_rps}', [PengesahanController::class, 'setuju']);
    Route::get('tolak/{id_rps}', [PengesahanController::class, 'tolak']);
    
    // menu kajur
    Route::get('monitoring', [MonitoringController::class, 'index']);

    // route logout
    Route::get('logout', [AuthController::class, 'logout']);
});