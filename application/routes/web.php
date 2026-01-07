<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\ChangePasswordController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\InvoiceController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\NotificationController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\PaypalController;
use App\Http\Controllers\Backend\TransactionController;
use App\Http\Controllers\Backend\UserListController;
use App\Http\Controllers\ContactController;
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
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/contact-message', [ContactController::class, 'sendMessage'])->name('contact.message');

Route::get('/free-trial', [FreeTrialController::class, 'index'])->name('free.trial');
Route::post('/free-trial', [FreeTrialController::class, 'store'])->name('free.trial.store');
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

Route::get('/forgot-password', [ForgotPasswordController::class, 'show'])->name('forgot-password.show');
Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->name('forgot-password.store');

Route::get('/reset-password/{token}', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'show'])->name('password.reset');
Route::post('/reset-password', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'store'])->name('password.update');

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
        Route::get('/show/{user}', [UserListController::class, 'show'])->name('user.show');
        Route::get('/edit/{user}', [UserListController::class, 'edit'])->name('user.edit');
        Route::put('/update/{user}', [UserListController::class, 'update'])->name('user.update');
        Route::delete('/remove/{user}', [UserListController::class, 'destroy'])->name('user.destroy');
    });

    Route::get('change-password', [ChangePasswordController::class, 'password'])->name('password');
    Route::put('change-password', [ChangePasswordController::class, 'changePassword'])->name('change.password');

    // Billing Address
    Route::get('billing', [\App\Http\Controllers\Backend\BillingController::class, 'index'])->name('billing.index');
    Route::put('billing', [\App\Http\Controllers\Backend\BillingController::class, 'update'])->name('billing.update');

    // Notice Module
    Route::resource('notice', NoticeController::class);

    // Chat
    Route::get('/chat', [\App\Http\Controllers\Backend\ChatController::class, 'index'])->name('chat.index');

    // Orders
    Route::prefix('order')->name('order.')->controller(OrderController::class)->group(function () {
        Route::get('all', 'list')->name('list');
        Route::get('tracking', 'tracking')->name('tracking');
        Route::get('pending', 'pending')->name('pending');
        Route::get('received', 'received')->name('received');
        Route::get('invoiced', 'invoiced')->name('invoiced');
        Route::get('processing', 'processing')->name('processing');
        Route::get('finalized', 'finalized')->name('finalized');
        Route::get('finalize/{order}', 'finalizeView')->name('finalize');         // New Route
        Route::post('finalize/{order}', 'finalizeStore')->name('finalize.store'); // New Route
        Route::get('completed', 'completed')->name('completed');
        Route::get('downloaded', 'downloaded')->name('downloaded');
        Route::get('canceled', 'canceled')->name('canceled');
        Route::get('paid', 'paid')->name('paid');

        // Order Placement
        Route::get('place', 'orderPlace')->name('place');
        Route::post('store', 'orderStore')->name('store');

        // Order Details
        Route::get('details/{order}', 'details')->name('details');

        // Order Status Update
        Route::post('update-status', 'updateStatus')->name('status.update');

        // Redo Routes
        Route::get('redo/{order}', 'redoView')->name('redo');
        Route::post('redo/{order}', 'redoStore')->name('redo.store');
        Route::get('redo-list', 'redoList')->name('redo.list');
    });
    Route::resource('invoice', InvoiceController::class);

    // Payment Routes
    Route::prefix('payment')->name('payment.')->controller(\App\Http\Controllers\Backend\PaymentController::class)->group(function () {
        Route::get('create/{order}', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('history', 'history')->name('history');
        Route::get('transaction/{transactionId}', 'show')->name('transaction.show');
        Route::post('refund/{transactionId}', 'refund')->name('refund');
    });

    Route::resource('transactions', TransactionController::class);
    Route::post('transactions/update-status', [TransactionController::class, 'updateStatus'])->name('transactions.update.status');

    // Free Trial Admin
    Route::resource('free-trial-list', \App\Http\Controllers\Backend\FreeTrialController::class);

    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
    Route::get('/notifications/{id}/read', [NotificationController::class, 'read'])->name('notifications.read');
    Route::post('/notifications/mark-all-read', [NotificationController::class, 'markAllAsRead'])->name('notifications.markAllAsRead');
    Route::get('/notifications/unread-count', [NotificationController::class, 'getUnreadCount'])->name('notifications.unreadCount');

    // Test Notification Routes (Development/Testing)
    Route::get('/test/notification', [\App\Http\Controllers\Backend\NotificationTestController::class, 'sendTestNotification'])->name('test.notification');
    Route::get('/test/order-notification', [\App\Http\Controllers\Backend\NotificationTestController::class, 'sendOrderNotification'])->name('test.order.notification');

    // PayPal Payment Routes
    Route::get('/paypal/pay/{order}', [PaypalController::class, 'payment'])->name('paypal.pay');
    Route::get('/paypal/success', [PaypalController::class, 'success'])->name('paypal.success');
    Route::get('/paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal.cancel');

});
