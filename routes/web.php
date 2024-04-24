<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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
Route::get('/', [UserRegisterController::class, 'index'])->name('user.index')->middleware('guard');
Route::post('/', [UserRegisterController::class, 'store'])->name('user.store')->middleware('guard');

// User Login
Route::get('/login', [UserLoginController::class, 'index'])->name('user.login');
Route::post('/login', [UserLoginController::class, 'store'])->name('store.login');

//Books Routes
Route::get('/home', [BookController::class, 'index'])->name('books.index');