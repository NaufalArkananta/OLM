<?php
use App\Http\Controllers\AgenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ownerController;
use App\Http\Controllers\propertiController;
use App\Http\Controllers\validatorController;
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
Route::get('/panduan', function () {
    return view('panduan');
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
Route::prefix('admin/owner')->group(function () {
    Route::get('/data-sales', [ownerController::class, 'index'])->name('admin.sales.index');
    Route::get('/data-sales/{id}/edit', [ownerController::class, 'edit'])->name('admin.sales.edit');
    Route::delete('/data-sales/{id}', [ownerController::class, 'destroy'])->name('admin.sales.destroy');
    Route::get('/data-sales/create', [OwnerController::class, 'create'])->name('admin.sales.create');
});

Route::prefix('admin/owner')->group(function () {
    Route::get('/data-validator', [validatorController::class, 'index'])->name('admin.validator.index');
    Route::get('/data-validator/{id}/edit', [validatorController::class, 'edit'])->name('admin.validator.edit');
    Route::delete('/data-validator/{id}', [validatorController::class, 'destroy'])->name('admin.validator.destroy');
    Route::get('/data-validator/create', [validatorController::class, 'create'])->name('admin.validator.create');
});
