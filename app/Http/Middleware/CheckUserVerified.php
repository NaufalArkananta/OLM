<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna sudah terverifikasi
        if (Auth::check() && !Auth::user()->is_verify) {
            // Jika belum terverifikasi, arahkan ke halaman verifikasi
            return redirect()->route('verification')->with('error', 'Anda perlu memverifikasi akun Anda.');
        }

        return $next($request);
    }
}