<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get("/register", [RegisterController::class, "show"]);
Route::post("/register", [RegisterController::class, "register"]);

Route::get("/login", [LoginController::class, "show"])->name("login");
Route::post("/login-store", [LoginController::class, "login"])->name(
    "login.store",
);
Route::get("/logout", [LoginController::class, "logout"])->name("logout");

Route::get("/dashboard", function () {
    return view("panel.dashboard");
})->middleware("auth");
