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
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\PaymentConfirmationController;
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
// Customer
Route::middleware(['auth', 'role:customer'])->group(
    function () {
        // profile
        Route::get('/profile', [HomeController::class, 'profile'])->name('customer.profile');
        Route::get('/editProfile/{id}', [HomeController::class, 'editProfile'])->name('customer.editProfile');
        Route::post('/updateProfile/{id}', [HomeController::class, 'updateProfile'])->name('customer.updateProfile');

        // cart
        Route::get('/cart', [CommerceController::class, 'show_cart'])->name('customer.cart');
        Route::get('/cart/{id}', [CommerceController::class, 'delete_cart'])->name('customer.cart.delete');
        Route::get('/add_to_cart/{id}', [CommerceController::class, 'add_to_cart'])->name('customer.add_to_cart');
        route::post('/update_cart', [CommerceController::class, 'update_cart'])->name('customer.cart.update');
        Route::get('/checkout', [CommerceController::class, 'checkout'])->name('customer.checkout');


        // Product
        Route::get('/glass_products', [CommerceController::class, 'glass_products'])->name('customer.glass_products');
        Route::get('/vase_products', [CommerceController::class, 'vase_products'])->name('customer.vase_products');
        Route::get('/decoration_products', [CommerceController::class, 'decoration_products'])->name('customer.decoration_products');
        Route::get('/utensil_products', [CommerceController::class, 'utensil_products'])->name('customer.utensil_products');
        Route::get('/other_products', [CommerceController::class, 'other_products'])->name('customer.other_products');
        Route::get('/custom_products_create', [CommerceController::class, 'custom_products_create'])->name('customer.custom_products.create');
        Route::post('/custom_products_store', [CommerceController::class, 'custom_products_store'])->name('customer.custom_products.store');

        // order
        Route::get('/status', [CommerceController::class, 'status_orders'])->name('customer.status.orders');
        Route::get('/payment-order/{id}', [CommerceController::class, 'payment_orders'])->name('customer.payment.orders');
        Route::post('/payment-order-update/{id}', [CommerceController::class, 'payment_update_orders'])->name('customer.payment.update.orders');
        Route::get('/confirmation-order/{id}', [CommerceController::class, 'payment_confirmation_orders'])->name('customer.confirmation.orders');
        Route::post('/confirmation-order-store/{id}', [CommerceController::class, 'payment_confirmation_store_orders'])->name('customer.confirmation.store.orders');
        Route::get('/cancel-order/{id}', [CommerceController::class, 'cancel_orders'])->name('customer.cancel.orders');
        Route::get('/detail-order/{id}', [CommerceController::class, 'detail_orders'])->name('customer.detail.orders');
    }
);
Route::get('/', [HomeController::class, 'index'])->name('customer.home');
Route::get('/contact', [HomeController::class, 'contact'])->name('customer.contact');
Route::post('/storeContact', [HomeController::class, 'storeContact'])->name('customer.storeContact');
Route::get('/commerce', [CommerceController::class, 'index'])->name('customer.commerce');
Route::get('/tourist', [TouristController::class, 'index'])->name('customer.tourist');

// Admin
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

        #payment method
        Route::get('/paymentMethod', [PaymentMethodController::class, 'index'])->name('admin.payment_method.show');
        Route::get('/paymentMethod-create', [PaymentMethodController::class, 'create'])->name('admin.payment_method.create');
        Route::post('/paymentMethod-store', [PaymentMethodController::class, 'store'])->name('admin.payment_method.store');
        Route::get('/paymentMethod-edit/{payment_method}', [PaymentMethodController::class, 'edit'])->name('admin.payment_method.edit');
        Route::post('/paymentMethod-update/{payment_method}', [PaymentMethodController::class, 'update'])->name('admin.payment_method.update');
        Route::get('/paymentMethod-delete/{payment_method}', [PaymentMethodController::class, 'delete'])->name('admin.payment_method.delete');

        #payment confirmation
        Route::get('/paymentConfirmation', [PaymentConfirmationController::class, 'index'])->name('admin.payment_confirmation.show');
        Route::get('/paymentConfirmation-edit/{payment_confirmation}', [PaymentConfirmationController::class, 'edit'])->name('admin.payment_confirmation.edit');
        Route::post('/paymentConfirmation-update/{payment_confirmation}', [PaymentConfirmationController::class, 'update'])->name('admin.payment_confirmation.update');
        Route::get('/paymentConfirmation-delete/{payment_confirmation}', [PaymentConfirmationController::class, 'delete'])->name('admin.payment_confirmation.delete');
    });
});


// Craftman
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
Route::get('/cart2', function () {
    return view('customer.cart');
});
Route::get('/gelas', function () {
    return view('customer.gelas');
});
