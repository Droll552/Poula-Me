<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);

Route::get('login', [SessionsController::class, 'create']);
Route::post('login', [SessionsController::class, 'store']);


Route::get('dashboard', [UserProductController::class, 'index']);
Route::post('dashboard', [UserProductController::class, 'store']);
Route::get('dashboard/create', [UserProductController::class, 'create']);
Route::post('dashboard', [UserProductController::class, 'store']);
