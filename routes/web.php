<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\agenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\propertiController;
use App\Http\Controllers\ValidatorController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Auth\AdminLoginController;

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
})->middleware('guest');
// route for admin login page
Route::get('/admin/login', function () {
    return view('admin.login');
})->middleware('guest'); 

// route for owner dashboard
Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('/admin/owner/dashboard', [OwnerController::class, 'index'])->name('admin.owner.dashboard');
});

// route for agen dashboard
Route::middleware(['auth', 'role:agent'])->group(function () {
    Route::get('/admin/agen/dashboard', [AgentController::class, 'index'])->name('admin.agen.dashboard');
});

// route for validator dashboard
Route::middleware(['auth', 'role:validator'])->group(function () {
    Route::get('/admin/validator/dashboard', [ValidatorController::class, 'index'])->name('admin.validator.dashboard');
});

// route for api auth for admin
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');

// route for api auth for user
Route::post('/login', [UserLoginController::class, 'login'])->name('login');
Route::middleware(['web'])->group(function () {
    Route::post('/register', [UserLoginController::class, 'register'])->name('register');
    Route::get('/register', function () {
        return view('register');
    });
    Route::get('/verification', [OtpController::class, 'index'])->name('verification');
});

Route::post('/logout', function () {
    Auth::logout(); // Logout pengguna
    session()->forget('role'); // Hapus role dari session
    return redirect('/');
})->name('logout');
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/properti', function () {
    return view('properti');
});

Route::get('/panduan', function () {
    return view('panduan');
});

Route::get('/admin/agen/prop/tambah', function () {
    return view(view: 'admin/agen/prop-tambah');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/properti', [propertiController::class, 'index']);
Route::get('/wishlist', [propertiController::class, 'wishlist']);
Route::get('/properti/{id}', [propertiController::class, 'detail'])->name('properti.detail');
Route::get('/admin/agen/prop/active', [agenController::class, 'index']);
Route::get('/admin/agen/prop/not-valid', [agenController::class, 'secondary']);
Route::get('/admin/agen/prop/selled', [agenController::class, 'third']);
