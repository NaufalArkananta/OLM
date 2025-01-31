<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
    
        $field = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$field => $credentials['login'], 'password' => $credentials['password']])) {
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

    public function updateLastActive()
    {
        // Ambil user_id dari session
        $userId = session('user_id');
    
        // Cek apakah user_id ada di session
        if ($userId) {
            // Cari pengguna berdasarkan user_id
            $user = User::find($userId);
    
            if ($user) {
                // Ambil role dari session
                $role = session('role');
    
                // Perbarui last_active hanya untuk role 'agent' dan 'validator'
                if ($role === 'agent' || $role === 'validator') {
                    $user->last_active = now(); // Atur waktu terakhir aktif
                    $user->save(); // Simpan perubahan
                }
            } else {
                return response()->json(['error' => 'User  not found.'], 404);
            }
        } else {
            return response()->json(['error' => 'User  ID not found in session.'], 401);
        }
    
        return response()->json(['success' => true]);
    }
}