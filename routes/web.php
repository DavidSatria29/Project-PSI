<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Craftman\DashboardController as CraftmanDashboardController;
use App\Http\Controllers\Admin\UserController;
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
    });
});

Route::middleware(['auth', 'role:craftman'])->group(function () {
    Route::prefix('craftman')->group(function () {
        Route::get('/dashboard', [CraftmanDashboardController::class, 'index'])->name('craftman.dashboard');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
