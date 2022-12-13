<?php

use App\Http\Controllers\Admin\AuthenticateController as AdminAuthenticateController;
use App\Http\Controllers\Admin\AuthenticateController as UsersAuthenticateController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Users\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\ProductsController as UsersProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::prefix('users')->middleware(['check_login'])->group(function () {
Route::get('/', [HomeController::class, 'home'])->name('users.home');
Route::get('/product', [UsersProductsController::class, 'Detail'])->name('users.products.detail');
Route::get('/category', [HomeController::class, 'Category'])->name('users.components.category');
Route::get('/carts', [HomeController::class, 'carts'])->name('users.components.carts');
Route::get('/cartdetail', [UsersProductsController::class, 'cartdetail'])->name('users.components.cartdetail');
Route::get('/delete_cart', [UsersProductsController::class, 'delete_cart'])->name('users.components.delete_cart');
Route::get('/add_cart', [UsersProductsController::class, 'add_cart'])->name('users.components.add_cart');
Route::get('/reduce_cart', [UsersProductsController::class, 'reduce_cart'])->name('users.components.reduce_cart');
Route::get('/complete', [HomeController::class, 'order'])->name('users.components.complete');
Route::get('/wait_for_confirmation', [HomeController::class, 'wait_for_confirmation'])->name('users.components.wait_for_confirmation');
Route::get('/confirm', [HomeController::class, 'confirm'])->name('users.confirm');
Route::get('/detail_cart', [HomeController::class, 'detail_cart'])->name('users.components.detail_cart');
// });

Route::get('admin/login', [AdminAuthenticateController::class, 'login'])->name('admin.login');
Route::post('admin/post_login', [AdminAuthenticateController::class, 'post_login'])->name('admin.post_login');

Route::prefix('admin')->group(function () {
    Route::get('login', [UsersAuthenticateController::class, 'login'])->name('users.login');
    Route::post('post_login', [UsersAuthenticateController::class, 'post_login'])->name('admin.users.post_login');
    Route::get('logout', [UsersAuthenticateController::class, 'logout'])->name('users.logout');
    //     Route::prefix('users')->group(function () {
    //     Route::get('login', [UserController::class, 'login'])->name('admin.users.login');
    //     Route::post('postlogin', [UserController::class, 'postlogin'])->name('admin.users.postlogin');
    Route::get('logout', [UserController::class, 'logout'])->name('admin.users.logout');
});



Route::prefix('admin')->group(function () {

    Route::prefix('products')->group(function () {
        Route::get('list', [ProductsController::class, 'list'])->name('admin.products.list');
        Route::get('detail', [ProductsController::class, 'detail'])->name('admin.products.detail');
        Route::get('add', [ProductsController::class, 'add'])->name('admin.products.add');
        Route::post('postadd', [ProductsController::class, 'postadd'])->name('admin.products.postadd');
        Route::get('update', [ProductsController::class, 'update'])->name('admin.products.update');
        Route::post('postupdate', [ProductsController::class, 'postupdate'])->name('admin.products.postupdate');
        Route::get('delete', [ProductsController::class, 'delete'])->name('admin.products.delete');
        Route::get('bin', [ProductsController::class, 'bin'])->name('admin.products.bin');
        Route::get('deleteforever', [ProductsController::class, 'deleteforever'])->name('admin.products.deleteforever');
        Route::get('restore', [ProductsController::class, 'restore'])->name('admin.products.restore');
        Route::get('restoreall', [ProductsController::class, 'restoreall'])->name('admin.products.restoreall');
    });

    Route::prefix('category')->group(function () {
        Route::get('list', [CategoryController::class, 'list'])->name('admin.category.list');
        Route::get('detail', [CategoryController::class, 'detail'])->name('admin.category.detail');
        Route::get('add', [CategoryController::class, 'add'])->name('admin.category.add');
        Route::post('postadd', [CategoryController::class, 'postadd'])->name('admin.category.postadd');
        Route::get('update', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::post('postupdate', [CategoryController::class, 'postupdate'])->name('admin.category.postupdate');
        Route::get('delete', [CategoryController::class, 'delete'])->name('admin.category.delete');
        Route::get('recycle_bin', [CategoryController::class, 'recycle_bin'])->name('admin.category.recycle_bin');
        Route::get('deleteforever', [CategoryController::class, 'deleteforever'])->name('admin.category.deleteforever');
        Route::get('restore', [CategoryController::class, 'restore'])->name('admin.category.restore');
        Route::get('restoreall', [CategoryController::class, 'restoreall'])->name('admin.category.restoreall');
    });
    Route::prefix('users')->group(function () {
        Route::get('list', [UserController::class, 'list'])->name('admin.users.list');
        Route::get('detail', [UserController::class, 'detail'])->name('admin.users.detail');
        Route::get('add', [UserController::class, 'add'])->name('admin.users.add');
        Route::post('postadd', [UserController::class, 'postadd'])->name('admin.users.postadd');
        Route::get('update', [UserController::class, 'update'])->name('admin.users.update');
        Route::post('postupdate', [UserController::class, 'postupdate'])->name('admin.users.postupdate');
        Route::get('delete', [UserController::class, 'delete'])->name('admin.users.delete');
    });
    Route::prefix('cart')->group(function () {
        Route::get('purchase_account', [CartController::class, 'purchase_account'])->name('admin.cart.purchase_account');
        Route::get('listcarts', [CartController::class, 'listcarts'])->name('admin.cart.listcarts');
        Route::get('detail_cart', [CartController::class, 'detail_cart'])->name('admin.cart.detail_cart');
        Route::get('confirm', [CartController::class, 'confirm'])->name('admin.cart.confirm');
    });
});
