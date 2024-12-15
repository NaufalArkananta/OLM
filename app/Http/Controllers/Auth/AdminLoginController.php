<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Coba login
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, periksa role pengguna
            $user = Auth::user();

            // Simpan data ke session
            session([
                'user_id' => $user->id,
                'role' => $user->role,
                'is_logged_in' => true, // Status login
            ]);
    
            // Logika pengalihan berdasarkan role
            switch ($user->role) {
                case 'owner':
                    return redirect()->route('admin.owner.dashboard');
                case 'agent':
                    return redirect()->route('admin.agen.dashboard');
                case 'validator':
                    return redirect()->route('admin.validator.dashboard');
                case 'user':
                    return redirect()->route('home'); 
                default:
                    return redirect('/');
            }
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }        
}