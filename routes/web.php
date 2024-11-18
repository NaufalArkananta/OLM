<?php

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