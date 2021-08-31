<?php

use App\Http\Controllers\AllProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('products', [AllProductController::class, 'index']);
Route::get('products/{product:slug}', [ProductController::class, 'show']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('dashboard', [DashboardController::class, 'index']);

Route::resource('dashboard/products', UserProductController::class)->except('show');
Route::get('dashboard/products/{product:slug}', [UserProductController::class, 'show']);

Route::resource('dashboard/categories', CategoryController::class)->except('show');
Route::resource('dashboard/users', UserController::class)->except(['create', 'store', 'show']);
Route::get('dashboard/users/{user:slug}', [UserController::class, 'show']);

