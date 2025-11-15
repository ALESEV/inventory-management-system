<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get("/", [MainController::class, "home"])->name("home");

Route::get("/about", [MainController::class, "about"])->name("about");

Route::get("/contacts", [MainController::class, "contacts"])->name("contacts");

Route::get("/login", [MainController::class, "login"])->name("login");

Route::get("/signup", [MainController::class, "signup"])->name("signup");