<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Admin login and register views

    public function index()
    {
        return view('index');
    }
    public function loginAdmin()
    {
        return view('admin.login');
    }

    public function registerAdmin()
    {
        return view('admin.register');
    }

    // Masyarakat login and register views
    public function loginMasyarakat()
    {
        return view('masyarakat.login');
    }

    public function registerMasyarakat()
    {
        return view('masyarakat.register');
    }

    // Handle admin login
    public function handleAdminLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['username' => 'Invalid credentials.']);
    }

    // Handle admin registration
    public function handleAdminRegister(Request $request)
    {
        $data = $request->validate([
            'nama_petugas' => 'required|string|max:100',
            'username' => 'required|string|max:50|unique:petugas',
            'password' => 'required|string|min:6|confirmed',
            'telp' => 'nullable|string|max:15',
            'role' => 'required|string|in:admin,editor,user',
        ]);

        $data['password'] = Hash::make($data['password']);
        Petugas::create($data);

        return redirect()->route('loginAdmin')->with('success', 'Registration successful.');
    }

    // Handle masyarakat login
    public function handleMasyarakatLogin(Request $request)
    {
        $credentials = $request->only('nik', 'password');
        if (Auth::guard('masyarakat')->attempt($credentials)) {
            return redirect()->route('home');
        }
        return back()->withErrors(['nik' => 'Invalid credentials.']);
    }

    // Handle masyarakat registration
    public function handleMasyarakatRegister(Request $request)
    {
        $data = $request->validate([
            'nik' => 'required|string|size:16|unique:masyarakat',
            'nama' => 'required|string|max:100',
            'password' => 'required|string|min:6|confirmed',
            'telp' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:100',
        ]);

        $data['password'] = Hash::make($data['password']);
        Masyarakat::create($data);

        return redirect()->route('loginMasyarakat')->with('success', 'Registration successful.');
    }

    // Logout function
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
