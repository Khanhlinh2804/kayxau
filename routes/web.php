<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;


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


Route::get('/', [PageController::class, 'index'])->name('home');
Route::prefix('home')->group(function () {
    Route::get('/product', [PageController::class, 'shop'])->name('shop');
    Route::get('/product/caterory/{id}', [PageController::class, 'category'])->name('shop.category');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/blog', [PageController::class, 'blog'])->name('blog');
    Route::get('/blog/detail/{id}', [PageController::class, 'blog_detail'])->name('blog_detail');
    Route::get('/contact', [ContactController::class, 'create'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact');
    
    // Route::get('/blog', [CommentController::class, 'comment'])->name('comment');
    Route::post('/blog/detail', [CommentController::class, 'comment'])->name('comment');
    Route::get('/product/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
    
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'signin'])->name('signin');
    Route::get('/register', [UserController::class, 'signup'])->name('signup');
    Route::post('/register', [UserController::class, 'register'])->name('register');
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
        
});

Route::prefix('cart')->group(function () {
    Route::get('/{id}', [CartController::class, 'Addcart'])->name('cart.add');
    Route::get('/', [CartController::class, 'cart'])->name('cart');
    Route::patch('/update', [CartController::class, 'UpdateCart'])->name('cart_update');
    Route::delete('/delete', [CartController::class, 'RemoveCart'])->name('cart_remove');
    Route::get('/o/checkout', [CartController::class, 'create'])->name('cart.checkout');
    Route::post('/o/checkout', [CartController::class, 'store'])->name('cart.store');
    Route::post('/district', [CartController::class, 'district'])->name('cart.district');
    
    // Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::get('/checkout/success', [CartController::class, 'success'])->name('cart.success');
    
});
Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/category/trashed', [CategoryController::class, 'trashed'])->name('category.trashed');
    Route::get('/category/restore/{id}', [CategoryController::class, 'restore'])->name('category.restore');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    
    Route::get('/product/trashed', [ProductController::class, 'trashed'])->name('product.trashed');
    Route::get('/product/restore/{id}', [ProductController::class, 'restore'])->name('product.restore');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    
    Route::get('/user/trashed', [UserController::class, 'trashed'])->name('user.trashed');
    Route::get('/user/restore/{id}', [UserController::class, 'restore'])->name('user.restore');
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    
    Route::get('/blog/trashed', [BlogController::class, 'trashed'])->name('blog.trashed');
    Route::get('/blog/restore/{id}', [BlogController::class, 'restore'])->name('blog.restore');
    Route::get('/blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');
    
    Route::get('/contact/trashed', [ContactController::class, 'trashed'])->name('contact.trashed');
    Route::get('/contact/restore/{id}', [ContactController::class, 'restore'])->name('contact.restore');
    Route::get('/contact/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');
    
    Route::get('/skill/trashed', [SkillController::class, 'trashed'])->name('skill.trashed');
    Route::get('/skill/restore/{id}', [SkillController::class, 'restore'])->name('skill.restore');
    Route::get('/skill/delete/{id}', [SkillController::class, 'delete'])->name('skill.delete');
    
    Route::get('/comment/trashed', [CommentController::class, 'trashed'])->name('comment.trashed');
    Route::get('/comment/restore/{id}', [CommentController::class, 'restore'])->name('comment.restore');
    Route::get('/comment/delete/{id}', [CommentController::class, 'delete'])->name('comment.delete');
    
    Route::get('/skill/trashed', [SkillController::class, 'trashed'])->name('skill.trashed');
    Route::get('/skill/restore/{id}', [SkillController::class, 'restore'])->name('skill.restore');
    Route::get('/skill/delete/{id}', [SkillController::class, 'delete'])->name('skill.delete');
    
    Route::get('/order/trashed', [OrderController::class, 'trashed'])->name('order.trashed');
    Route::get('/order/restore/{id}', [OrderController::class, 'restore'])->name('order.restore');
    Route::get('/order/delete/{id}', [OrderController::class, 'delete'])->name('order.delete');
    
    Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');
    
    // Route::get('/comment/index', [CommentController::class, 'index'])->name('comment.index');


    Route::resources([
        'category'=> CategoryController::class,
        'product'=> ProductController::class,
        'user' =>UserController::class,
        'blog' => BlogController::class,
        'skill' => SkillController::class,
        'comment' => CommentController::class,
        'order' => OrderController::class,
    ]);
});
// Route::get('/category', [CategoryController::class, 'index'])->name('category.index');




