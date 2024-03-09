<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Craftman\DashboardController as CraftmanDashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Models\Categories;
use App\Models\CustomProduct;
use App\Models\Product;

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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/test', [AdminDashboardController::class, 'test'])->name('admin.test');
        Route::get('/users', [UserController::class, 'index'])->name('admin.user.show');
        Route::get('/users-create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/users-store', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/users-edit/{user}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::post('/users-update/{user}', [UserController::class, 'update'])->name('admin.user.update');
        Route::get('/users-delete/{user}', [UserController::class, 'delete'])->name('admin.user.delete');

        # kategori 
        Route::get('/categories', [CategoryController::class, 'index'])->name('admin.category.show');
        Route::get('/categories-create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/categories-store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/categories-edit/{category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/categories-update/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('/categories-delete/{category}', [CategoryController::class, 'delete'])->name('admin.category.delete');


        # Product 
        Route::get('/products', [ProductController::class, 'index'])->name('admin.product.show');
        Route::get('/products-create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/products-store', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
        Route::post('/products-update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
        Route::delete('/products-delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');

        #custom produk 
        Route::get('/customProducts', [CustomProductController::class, 'index'])->name('admin.custom_product.show');
        Route::get('/customProducts-create', [CustomProductController::class, 'create'])->name('admin.custom_product.create');
        Route::post('/customProducts-store', [CustomProductController::class, 'store'])->name('admin.custom_product.store');
        Route::get('/customProducts-edit/{custom_product}', [CustomProductController::class, 'edit'])->name('admin.custom_product.edit');
        Route::post('/customProducts-update/{custom_product}', [CustomProductController::class, 'update'])->name('admin.custom_product.update');
        Route::get('/customProducts-delete/{custom_product}', [CustomProductController::class, 'delete'])->name('admin.custom_product.delete');
    });
});

Route::middleware(['auth', 'role:craftman'])->group(function () {
    Route::prefix('craftman')->group(function () {
        Route::get('/dashboard', [CraftmanDashboardController::class, 'index'])->name('craftman.dashboard');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
