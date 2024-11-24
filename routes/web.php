<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\propertiController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});
Route::get('/admin', function () {
    return view('admin/login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/verification', function () {
    return view('verification');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/properti', function () {
    return view('properti');
});
Route::get('/admin/owner/dashboard', function () {
    return view(view: 'admin/owner/dashboard');
});
Route::get('/admin/validator/dashboard', function () {
    return view(view: 'admin/validator/dashboard');
});
Route::get('/admin/agen/dashboard', function () {
    return view(view: 'admin/agen/dashboard');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/properti', [propertiController::class, 'index']);
Route::get('/wishlist', [propertiController::class, 'wishlist']);
Route::get('/properti/{id}', [propertiController::class, 'detail'])->name('properti.detail');