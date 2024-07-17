<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginAdmin()
    {
        return view('admin.login');
    }
    public function registerAdmin()
    {
        return view('admin.register');
    }
}
