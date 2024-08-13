<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashcboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/dashboard', [DashcboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::get('/customerList', [CustomerController::class, 'index'])->name('admin.customer.index');
    Route::post('/admin/approve-user/{id}', [CustomerController::class, 'approveUser'])->name('admin.approve-user');
});
