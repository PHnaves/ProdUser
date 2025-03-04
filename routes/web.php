<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// rotas relacionadas aos usuarios
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/users/{user}/show', [UserController::class, 'show'])->name('users.show');

Route::put('/users/{user}update', [UserController::class, 'update'])->name('users.update');

Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::get('/users', [UserController::class, 'index'])->name('users');


// rotas relacionadas aos produtos
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/products/{product}/show', [ProductController::class, 'show'])->name('products.show');

Route::put('/products/{product}/update', [ProductController::class, 'update'])->name('products.update');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::get('/products', [ProductController::class, 'index'])->name('products');


// rotas relacionadas as categorias
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::put('/categories/{category}update', [CategoryController::class, 'update'])->name('categories.update');

Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
