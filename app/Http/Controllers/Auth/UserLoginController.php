<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserLoginController extends Controller
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

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users', // Validasi username
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422); // Mengembalikan error jika validasi gagal
        }
    
        // Buat pengguna baru dengan role 'user'
        $user = User::create([
            'username' => $request->username, // Menyimpan username
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password sebelum disimpan
            'name' => $request->username,
            'role' => 'user', // Menetapkan role pengguna sebagai 'user'
        ]);
    
        // Simpan informasi pengguna di session
        session([
            'user_id' => $user->id,
            'role' => $user->role,
            'is_logged_in' => true, // Status login
        ]);
    
        // Redirect ke halaman verifikasi setelah registrasi berhasil
        return redirect()->route('verification');
    }

}
