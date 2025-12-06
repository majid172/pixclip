<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\UserListController;
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

});
