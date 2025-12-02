<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("home");
});
Route::get("/workflow", function () {
    return view("workflow");
});
Route::get("/price", function () {
    return view("price");
});
Route::get("/contact", function () {
    return view("contact");
});
