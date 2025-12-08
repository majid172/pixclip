<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\UserListController;
use App\Http\Controllers\FreeTrialController;
use App\Http\Controllers\ServiceController;

Route::get("/", function () {
    return view("home");
});
Route::get("/workflow", function () {
    return view("workflow");
});
Route::get("/price", function () {
    return view("price");
});
Route::get("/about", function () {
    return view("about");
});
Route::get('/free-trial',[FreeTrialController::class,'index'])->name('free.trial');
Route::get("/contact", function () {
    return view("contact");
});
Route::get('service/{slug}',[ServiceController::class,'show'])->name('services.slug');

Route::get("/register", [RegisterController::class, "show"]);
Route::post("/register", [RegisterController::class, "register"]);

Route::get("/login", [LoginController::class, "show"])->name("login");
Route::post("/login-store", [LoginController::class, "login"])->name(
    "login.store",
);
Route::get("/logout", [LoginController::class, "logout"])->name("logout");

Route::middleware(["auth"])->group(function () {
   Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    Route::get("/users-list", [UserListController::class, "list"])->name(
        "users.list",
    );
    Route::get("/user-edit/{user}",[UserListController::class,'edit'])->name('user.edit');
    Route::put("/user-update/{user}",[UserListController::class,'update'])->name('user.update');
    Route::delete('/user-remove/{user}', [UserListController::class, 'destroy'])->name('user.destroy');

    // notice list
    Route::resource('notice', NoticeController::class);

    // order list
    Route::controller(OrderController::class)->prefix('order')->name('order.')->group(function(){
        Route::get('all','list')->name('list');
        Route::get('tracking','tracking')->name('tracking');
        Route::get('pending','pending')->name('pending');
        Route::get('received','received')->name('received');
        Route::get('invoiced','invoiced')->name('invoiced');
        Route::get('processing','processing')->name('processing');
        Route::get('finalized','finalized')->name('finalized');
        Route::get('completed','completed')->name('completed');
        Route::get('downloaded','downloaded')->name('downloaded');
        Route::get('canceled','canceled')->name('canceled');
        Route::get('paid','paid')->name('paid');
    });

});
