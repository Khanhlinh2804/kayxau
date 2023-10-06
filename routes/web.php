<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;


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




Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::prefix('admin')->group(function () {
    
    Route::get('/category/trashed', [CategoryController::class, 'trashed'])->name('category.trashed');
    Route::get('/category/restore/{id}', [CategoryController::class, 'restore'])->name('category.restore');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    
    Route::get('/product/trashed', [ProductController::class, 'trashed'])->name('product.trashed');
    Route::get('/product/restore/{id}', [ProductController::class, 'restore'])->name('product.restore');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

    Route::resources([
        'category'=> CategoryController::class,
        'product'=> ProductController::class,
    ]);
});
// Route::get('/category', [CategoryController::class, 'index'])->name('category.index');




