<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Models\Product;
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

Route::get('/edit/{id}',  [CustomerController::class, 'edit']);

Route::post('/updateCustomer', [CustomerController::class, 'updateCustomer']);

//products

Route::get('/products', [ProductController::class, 'index']);

Route::get('/deleteProduct/{id}', [ProductController::class, 'deleteProduct']);

Route::get('/addProduct', [ProductController::class, 'addProduct']);

Route::post('/saveProduct', [ProductController::class, 'saveProduct']);

Route::get('/editProduct/{id}', [ProductController::class, 'editProduct']);

Route::post('/updateProduct', [ProductController::class, 'updateProduct']);