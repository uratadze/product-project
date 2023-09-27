<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/products', [ProductController::class, 'list'])->name('product.list');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/categories', [CategoryController::class, 'list'])->name('category.list');
Route::get('/category/{product}', [CategoryController::class, 'show'])->name('category.show');
