<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\agenController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\newOwnerController;
use App\Http\Controllers\ownerUserController;
use App\Http\Controllers\propertiController;
use App\Http\Controllers\validatorController;
use App\Http\Controllers\WishlistController;

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
    Route::get('/admin/owner/dashboard', [newOwnerController::class, 'index'])->name('admin.owner.dashboard');
    Route::prefix('admin/owner')->group(function () {
        Route::get('/data-sales', [ownerUserController::class, 'indexS'])->name('admin.sales.index');
        Route::get('/data-sales/{id}/edit', [ownerUserController::class, 'editS'])->name('admin.sales.edit');
        Route::delete('/data-sales/{id}', [ownerUserController::class, 'destroyS'])->name('admin.sales.destroy');
        Route::post('/data-sales/create', [ownerUserController::class, 'createS'])->name('admin.sales.create');
    });
    Route::prefix('admin/owner')->group(function () {
        Route::get('/data-validator', [ownerUserController::class, 'indexV'])->name('admin.validator.index');
        Route::get('/data-validator/{id}/edit', [ownerUserController::class, 'editV'])->name('admin.validator.edit');
        Route::delete('/data-validator/{id}', [ownerUserController::class, 'destroyV'])->name('admin.validator.destroy');
        Route::post('/data-validator/create', [ownerUserController::class, 'createV'])->name('admin.validator.create');
    });
    Route::get('/user/{id}', [ownerUserController::class, 'show'])->name('agents.show');
    Route::post('/user/{id}/update', [ownerUserController::class, 'update'])->name('agents.update');
    Route::delete('/user/{id}', [ownerUserController::class, 'destroy'])->name('user.destroy');
});

// route for agen dashboard
Route::middleware(['auth', 'role:agent'])->group(function () {
    Route::get('/admin/agen/dashboard', [AgentController::class, 'index'])->name('admin.agen.dashboard');
    Route::get('/admin/agen/prop/tambah', [AgentController::class, 'create'])->name('properties.create');
    Route::get('/admin/agen/prop/active', [agenController::class, 'valid'])->name('properti.list');
    Route::get('/admin/agen/prop/not-valid', [agenController::class, 'notValid'])->name('properti.list.not-valid');
    Route::get('/admin/agen/prop/selled', [agenController::class, 'third']);
    Route::get("/admin/agen/notif", [AgenController::class, 'notif'])->name('agen.notif');
});

Route::post('/property/create', [PropertiController::class, 'store'])->name('properties.store');


// route for validator dashboard
Route::middleware(['auth', 'role:validator'])->group(function () {
    Route::get('/admin/validator/dashboard', [validatorController::class, 'index'])->name('admin.validator.dashboard');
    Route::prefix('admin/validator')->group(function () {
        Route::get('/prop-need-validate', [validatorController::class, 'needValidate']);
        Route::get('/prop-validated', [validatorController::class, 'validated']);
        Route::post('/property/validate', [validatorController::class, 'validateProperty'])->name('property.validate');
        Route::post('/reject-property', [validatorController::class, 'rejectProperty'])->name('reject.property');

    });
});

// route for user
Route::middleware(['auth'])->group(function () {
    Route::post('/wishlist/toggle/{property}', [WishlistController::class, 'toggle'])->middleware('auth');
    Route::get('/properti', [propertiController::class, 'index']);
    Route::get('/wishlist', [propertiController::class, 'wishlist']);
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
Route::post('/verify-otp', [UserLoginController::class, 'verifyOtp'])->name('verify.otp');

// route for logout
Route::post('/logout', function () {
    Auth::logout(); // Logout pengguna
    session()->forget('role'); // Hapus role dari session
    return redirect('/');
})->name('logout');
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    });
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/properti/{id}', [propertiController::class, 'show'])->name('properti.detail');

Route::prefix('/admin/owner')->group(function () {
    Route::get('/prop-active', [newOwnerController::class, 'activeProp']);
    Route::get('/prop-selled', [newOwnerController::class, 'selledProp']);
    Route::get('/prop-need-validate', [newOwnerController::class, 'needValidateProp']);
    Route::get('/table-prop', [newOwnerController::class, 'tableProp']);
    Route::get('/settings', [newOwnerController::class, 'settings']);
});


Route::get('admin/validator/test1', function () {
    return view('admin.validator.validate-popup');
});

Route::get('admin/validator/test2', function () {
    return view('admin.validator.decline-popup');
});

Route::post('/update-last-active', [AdminLoginController::class, 'updateLastActive'])->name('update.last.active');
