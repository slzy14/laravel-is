<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Models\Customer;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CustomerController::class, 'index'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::get('/register', [UserController::class, 'register']);

Route::post('/login/process', [UserController::class, 'process']);

Route::post('/store', [UserController::class, 'store']);

Route::get('/customer', [CustomerController::class, 'index']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/delete/{id}',  [CustomerController::class, 'delete'])->middleware('auth');

Route::get('/addUser', [CustomerController::class, 'addUser'])->middleware('auth');

Route::post('/save', [CustomerController::class, 'saveUser'])->middleware('auth');
