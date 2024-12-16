<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Cek apakah pengguna terautentikasi
        if (!Auth::check()) {
            return redirect('/admin/login'); // Redirect ke halaman login jika belum login
        }

        // Cek apakah pengguna terautentikasi
        if (!session('is_logged_in')) {
            return redirect('/admin/login'); // Redirect ke halaman login jika belum login
        }

        // Cek apakah role pengguna sesuai
        if (session('role') !== $role) {
            return redirect('/'); // Redirect jika role tidak sesuai
        }

        return $next($request);
    }
}