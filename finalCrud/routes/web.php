<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/show/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('create', [ProductController::class, 'create'])->name('product.create');
Route::get('destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::post('{product}', [ProductController::class, 'store'])->name('product.store');
Route::get('{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('product/update/{product}', [ProductController::class, 'update'])->name('product.update');