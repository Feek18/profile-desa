<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function artikel()
    {
        return view('admin.components.pages.artikel');
    }
    public function pengaduan()
    {
        return view('admin.components.pages.pengaduan');
    }
    public function tanggapan()
    {
        return view('admin.components.pages.tanggapan');
    }
    public function petugas()
    {
        return view('admin.components.pages.petugas');
    }
    public function penduduk()
    {
        return view('admin.components.pages.rumahtangga');
    }
    public function surat()
    {
        return view('admin.components.pages.surat');
    }
    public function pemetaan()
    {
        return view('admin.components.pages.pemetaan');
    }
}
