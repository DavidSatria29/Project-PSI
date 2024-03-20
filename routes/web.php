<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Craftman\DashboardController as CraftmanDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Craftman\ProductController as CraftmanProductController;
use App\Http\Controllers\Admin\CustomProductController as AdminCustomProductController;
use App\Http\Controllers\Craftman\CustomProductController as CraftmanCustomProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Craftman\ReportController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\CommerceController;
use App\Http\Controllers\Customer\TouristController;
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

Route::middleware(['auth', 'role:user'])->group(
    function () {
        Route::get('/profile', [HomeController::class, 'profile'])->name('user.profile');
        Route::get('/editProfile/{id}', [HomeController::class, 'editProfile'])->name('user.editProfile');
        Route::post('/updateProfile/{id}', [HomeController::class, 'updateProfile'])->name('user.updateProfile');
        Route::get('/cart', [CommerceController::class, 'cart'])->name('user.cart');
        Route::get('/status', [CommerceController::class, 'status'])->name('user.status');
    }
);
Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('/contact', [HomeController::class, 'contact'])->name('user.contact');
Route::post('/storeContact', [HomeController::class, 'storeCOntact'])->name('user.storeContact');
Route::get('/commerce', [CommerceController::class, 'index'])->name('user.commerce');
Route::get('/tourist', [TouristController::class, 'index'])->name('user.tourist');
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
        Route::get('/products', [AdminProductController::class, 'index'])->name('admin.product.show');
        Route::get('/products-create', [AdminProductController::class, 'create'])->name('admin.product.create');
        Route::post('/products-store', [AdminProductController::class, 'store'])->name('admin.product.store');
        Route::get('/products-edit/{product}', [AdminProductController::class, 'edit'])->name('admin.product.edit');
        Route::post('/products-update/{product}', [AdminProductController::class, 'update'])->name('admin.product.update');
        Route::delete('/products-delete/{product}', [AdminProductController::class, 'delete'])->name('admin.product.delete');

        #custom produk 
        Route::get('/customProducts', [AdminCustomProductController::class, 'index'])->name('admin.custom_product.show');
        Route::get('/customProducts-edit/{custom_product}', [AdminCustomProductController::class, 'edit'])->name('admin.custom_product.edit');
        Route::post('/customProducts-update/{custom_product}', [AdminCustomProductController::class, 'update'])->name('admin.custom_product.update');
        Route::get('/customProducts-delete/{custom_product}', [AdminCustomProductController::class, 'delete'])->name('admin.custom_product.delete');

        #contact
        Route::get('/contact', [ContactController::class, 'index'])->name('admin.contact.show');
        Route::get('/contact-delete/{contact}', [ContactController::class, 'delete'])->name('admin.contact.delete');

        #cart
        Route::get('/cart', [CartController::class, 'index'])->name('admin.cart.show');
        Route::get('/cart-delete/{cart}', [CartController::class, 'delete'])->name('admin.cart.delete');

        #Reservation
        Route::get('/reservation', [ReservationController::class, 'index'])->name('admin.reservation.show');
        Route::get('/reservation-delete/{reservation}', [ReservationController::class, 'delete'])->name('admin.reservation.delete');

        #order
        Route::get('/order', [OrderController::class, 'index'])->name('admin.order.show');
        Route::get('/orders-edit/{order}', [OrderController::class, 'edit'])->name('admin.order.edit');
        Route::post('/orders-update/{order}', [OrderController::class, 'update'])->name('admin.order.update');
        Route::get('/order-delete/{order}', [OrderController::class, 'delete'])->name('admin.order.delete');

        #review
        Route::get('/review', [ReviewController::class, 'index'])->name('admin.review.show');
        Route::get('/review-delete/{review}', [ReviewController::class, 'delete'])->name('admin.review.delete');
    });
});

Route::middleware(['auth', 'role:craftman'])->group(function () {
    Route::prefix('craftman')->group(function () {
        Route::get('/dashboard', [CraftmanDashboardController::class, 'index'])->name('craftman.dashboard');

        # Product
        Route::get('/products', [CraftmanProductController::class, 'index'])->name('craftman.product.show');
        Route::get('/products-create', [CraftmanProductController::class, 'create'])->name('craftman.product.create');
        Route::post('/products-store', [CraftmanProductController::class, 'store'])->name('craftman.product.store');
        Route::get('/products-edit/{product}', [CraftmanProductController::class, 'edit'])->name('craftman.product.edit');
        Route::post('/products-update/{product}', [CraftmanProductController::class, 'update'])->name('craftman.product.update');
        Route::delete('/products-delete/{product}', [CraftmanProductController::class, 'delete'])->name('craftman.product.delete');


        #custom produk
        Route::get('/customProducts', [CraftmanCustomProductController::class, 'index'])->name('craftman.custom_product.show');
        Route::get('/customProducts-edit/{custom_product}', [CraftmanCustomProductController::class, 'edit'])->name('craftman.custom_product.edit');
        Route::post('/customProducts-update/{custom_product}', [CraftmanCustomProductController::class, 'update'])->name('craftman.custom_product.update');
        Route::get('/customProducts-delete/{custom_product}', [CraftmanCustomProductController::class, 'delete'])->name('craftman.custom_product.delete');

        #Report
        Route::get('/report', [ReportController::class, 'index'])->name('craftman.report.show');
        Route::get('/report-delete/{report}', [ReportController::class, 'delete'])->name('craftman.report.delete');
    });
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
