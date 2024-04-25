<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisterController;

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

// User Routes
Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::post('/', [UserController::class, 'store'])->name('user.store');
Route::get('/{user}/id', [UserController::class, 'userProfile'])->name('user.profile');
Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user.edit');

// User Login
Route::get('/login', [UserLoginController::class, 'index'])->name('user.login');
Route::post('/login', [UserLoginController::class, 'store'])->name('store.login');

// Books Routes
Route::get('/home', [BookController::class, 'index'])->name('books.index');

// Buy Routes
Route::post('/buy/{book}', [BuyController::class, 'store'])->name('buy.store');
