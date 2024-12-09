<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
 
//auth routes 
Route::get("/login",[AuthController::class,"login"])->name("auth.login");
Route::get("/logout",[AuthController::class,"logout"])->name("auth.logout");

Route::post("/login",[AuthController::class,"loginSubmit"])->name("auth.loginSubmit");
