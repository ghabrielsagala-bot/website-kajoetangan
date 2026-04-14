<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Show login form
     */
    public function loginForm()
    {
        return view('Admin.loginadmin');
    }

    /**
     * Handle login
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        // Try to find admin by email or username
        $admin = Admin::where('email', $request->email)
                     ->orWhere('username', $request->email)
                     ->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return back()->withErrors(['email' => 'Email atau password salah!'])->withInput($request->only('email'));
        }

        if (!$admin->is_active) {
            return back()->withErrors(['email' => 'Akun admin tidak aktif!'])->withInput($request->only('email'));
        }

        // Set session for admin
        session([
            'admin_id' => $admin->id,
            'admin_name' => $admin->name,
            'admin_email' => $admin->email,
            'admin_role' => $admin->role,
        ]);

        // Update last login
        $admin->update([
            'last_login_at' => now(),
            'last_login_ip' => $request->ip(),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Selamat datang, ' . $admin->name . '!');
    }

    /**
     * Handle logout
     */
    public function logout(Request $request)
    {
        session()->forget(['admin_id', 'admin_name', 'admin_email', 'admin_role']);
        
        return redirect()->route('login.form')->with('success', 'Anda berhasil logout!');
    }
}
