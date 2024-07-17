<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', function () {
    return view('index');
});




// Admin login & register
Route::get('/admin/login', [AuthController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('/admin/login', [AuthController::class, 'handleAdminLogin']);
Route::get('/admin/register', [AuthController::class, 'registerAdmin'])->name('registerAdmin');
Route::post('/admin/register', [AuthController::class, 'handleAdminRegister']);

// Masyarakat login & register
Route::get('/masyarakat/login', [AuthController::class, 'loginMasyarakat'])->name('loginMasyarakat');
Route::post('/masyarakat/login', [AuthController::class, 'handleMasyarakatLogin']);
Route::get('/masyarakat/register', [AuthController::class, 'registerMasyarakat'])->name('registerMasyarakat');
Route::post('/masyarakat/register', [AuthController::class, 'handleMasyarakatRegister']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes
Route::middleware('auth.custom')->group(function () {
    // dashboard admin staff
    // other protected routes
});
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard/artikel', [DashboardController::class, 'artikel'])->name('artikel');
Route::get('/dashboard/pengaduan', [DashboardController::class, 'pengaduan'])->name('pengaduan');
Route::get('/dashboard/tanggapan', [DashboardController::class, 'tanggapan'])->name('tanggapan');
Route::get('/dashboard/petugas', [DashboardController::class, 'petugas'])->name('petugas');
Route::get('/dashboard/penduduk', [DashboardController::class, 'penduduk'])->name('penduduk');
Route::get('/dashboard/surat', [DashboardController::class, 'surat'])->name('surat');
Route::get('/dashboard/pemetaan', [DashboardController::class, 'pemetaan'])->name('pemetaan');