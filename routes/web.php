<?php

use App\Http\Controllers\AllTransactionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\OutboxController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceiveController;
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

    // login
    Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // user controller
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::post('/show', [UserController::class, 'show'])->name('user.show');
    Route::post('/update', [UserController::class, 'update'])->name('user.update');

    // profile controller
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/showprofile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/editprofile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::get('/alltransaction', [AllTransactionController::class, 'index'])->name('alltransaction.index');
    Route::post('/alltransactionstore', [AllTransactionController::class, 'store'])->name('alltransaction.store');
    Route::post('/alltransactionshow', [AllTransactionController::class, 'show'])->name('alltransaction.show');
    Route::post('/alltransactionview', [AllTransactionController::class, 'view'])->name('alltransaction.view');

    Route::get('/inbox', [InboxController::class, 'index'])->name('inbox.index');
    Route::post('/inboxstore', [InboxController::class, 'store'])->name('inbox.store');
    Route::post('/inboxshow', [InboxController::class, 'show'])->name('inbox.show');

    Route::post('/inboxcreate', [InboxController::class, 'create'])->name('inbox.create');
    Route::post('/inboxview', [InboxController::class, 'view'])->name('inbox.view');
    Route::post('/division', [InboxController::class, 'division'])->name('inbox.division');
    Route::post('/section', [InboxController::class, 'section'])->name('inbox.section');

    Route::get('/outbox', [OutboxController::class, 'index'])->name('outbox.index');
    Route::post('/outboxshow', [OutboxController::class, 'show'])->name('outbox.show');

    Route::post('/profileimg', [ProfileController::class, 'ProfileImg'])->name('profile.ProfileImg');

    Route::post('/receive', [ReceiveController::class, 'index'])->name('receive.index');
    Route::get('/show', [ReceiveController::class, 'show'])->name('receive.show');

});

  // default view
    Route::get('/login', [AuthController::class, 'index'])->name('index');
    // login submit
    Route::post('/login', [AuthController::class, 'login'])->name('login');
