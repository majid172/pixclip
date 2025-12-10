<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\ChangePasswordController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\UserListController;
use App\Http\Controllers\FreeTrialController;
use App\Http\Controllers\ServiceController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Pages
|--------------------------------------------------------------------------
*/
Route::view('/', 'home');
Route::view('/workflow', 'workflow');
Route::view('/price', 'price');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/free-trial', [FreeTrialController::class, 'index'])->name('free.trial');
Route::get('service/{slug}', [ServiceController::class, 'show'])->name('services.slug');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Email Verification Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/email/verify', function () {
        return view('auth.verify_email');
    })->name('verification.notice');

    // Handle verification link
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect()->route('dashboard');
    })->middleware(['signed'])->name('verification.verify');

    // Resend verification email
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('success', 'Verification link sent!');
    })->middleware('throttle:6,1')->name('verification.send');
});

/*
|--------------------------------------------------------------------------
| Protected Backend Routes (auth + verified)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // User Management
    Route::prefix('users')->group(function () {
        Route::get('/list', [UserListController::class, 'list'])->name('users.list');
        Route::get('/edit/{user}', [UserListController::class, 'edit'])->name('user.edit');
        Route::put('/update/{user}', [UserListController::class, 'update'])->name('user.update');
        Route::delete('/remove/{user}', [UserListController::class, 'destroy'])->name('user.destroy');
    });

    Route::get('change-password',[ChangePasswordController::class,'password'])->name('password');
    Route::put('change-password',[ChangePasswordController::class,'changePassword'])->name('change.password');

    // Notice Module
    Route::resource('notice', NoticeController::class);

    // Orders
    Route::prefix('order')->name('order.')->controller(OrderController::class)->group(function () {
        Route::get('all', 'list')->name('list');
        Route::get('tracking', 'tracking')->name('tracking');
        Route::get('pending', 'pending')->name('pending');
        Route::get('received', 'received')->name('received');
        Route::get('invoiced', 'invoiced')->name('invoiced');
        Route::get('processing', 'processing')->name('processing');
        Route::get('finalized', 'finalized')->name('finalized');
        Route::get('completed', 'completed')->name('completed');
        Route::get('downloaded', 'downloaded')->name('downloaded');
        Route::get('canceled', 'canceled')->name('canceled');
        Route::get('paid', 'paid')->name('paid');

        // Order Placement
        Route::get('place', 'orderPlace')->name('place');
        Route::post('store', 'orderStore')->name('store');

        // Order Details
        Route::get('details/{order}', 'details')->name('details');
    });
});
