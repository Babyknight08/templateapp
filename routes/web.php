<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthenticatedMiddleware;
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

// Dashboard Route
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


// User Routes
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::post('/store', [UserController::class, 'store'])->name('user.store');
Route::post('/show', [UserController::class, 'show'])->name('user.show');

// Logout Route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Non-Login Route
Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login');
    
