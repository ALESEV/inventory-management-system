<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/", [MainController::class, "home"])->name("home");

Route::get("/about", [MainController::class, "about"])->name("about");

Route::get("/contacts", [MainController::class, "contacts"])->name("contacts");

Route::get("/login", [AuthController::class, "login"])->name("login");

Route::get("/register", [AuthController::class, "register"])->name("register");

Route::post("/register", [AuthController::class, "registerPost"])->name("registerPost");

Route::post("/login", [AuthController::class, "loginPost"])->name("loginPost");

Route::get("/logout", [AuthController::class, "logout"])->name("logout");

Route::get("/app", [AppController::class, "homepageApp"])->middleware("auth")->name("homepageApp");

Route::get("/app/inventory/products", [AppController::class, "appInventoryProducts"])->middleware("auth")->name("appInventoryProducts");

Route::get('/app/inventory/products/{id}', [ProductController::class, 'show'])->name('product.show');
