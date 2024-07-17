<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('index');
});

// login & regis admin & staff
Route::get('/login', [AuthController::class, 'loginAdmin'])->name('loginAdmin');
Route::get('/register', [AuthController::class, 'registerAdmin'])->name('registerAdmin');

// dashboard admin staff
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard/artikel', [DashboardController::class, 'artikel'])->name('artikel');
Route::get('/dashboard/pengaduan', [DashboardController::class, 'pengaduan'])->name('pengaduan');
Route::get('/dashboard/tanggapan', [DashboardController::class, 'tanggapan'])->name('tanggapan');
Route::get('/dashboard/petugas', [DashboardController::class, 'petugas'])->name('petugas');
Route::get('/dashboard/surat', [DashboardController::class, 'surat'])->name('surat');
Route::get('/dashboard/pemetaan', [DashboardController::class, 'pemetaan'])->name('pemetaan');

