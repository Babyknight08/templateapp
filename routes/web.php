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


Route::middleware([AuthenticatedMiddleware::class])->group(function () {

    // User Routes
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::post('/show', [UserController::class, 'show'])->name('user.show');

    // Non-Login Route default view
    Route::get('/login', [AuthController::class, 'index'])->name('login.index');

    // click login
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    // default view
    Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');
    // Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

});

    // Logout Route
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');