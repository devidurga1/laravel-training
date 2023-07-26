<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomAuthController;

use App\Models\Category;
use App\Models\User;

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

Route::get('/', function () {
  return view('layouts.welcome');
});

//Route::resource('products', ProductController::class);
//Route::resource('categories', CategoryController::class);
//Route::resource('orders', OrderController::class);

//Route::get("register", [UserController::class, 'create']);
//Route::get("login", [UserController::class, 'createlogin']);

//Route::post("register/create", [UserController::class, 'store']);
//Route::post("login/createlogin", [UserController::class, 'storelogin']);


//Route::get('showlist', [ProductController::class, 'showlist']);






Route::middleware(['user-access'])->group(function () {
  Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
  Route::resource('products', ProductController::class);
  Route::resource('categories', CategoryController::class);
  Route::resource('orders', OrderController::class);
  Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
});

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
//Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



Route::prefix('admin')->group(function () {

  Route::controller(\App\Http\Controllers\CategoryController::class)->group(function () {

    Route::get('category', 'index');
    Route::get('category/create', 'create');
    Route::post('category', 'store');
  });
});
