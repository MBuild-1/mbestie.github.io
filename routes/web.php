<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category/{category_slug}', [App\Http\Controllers\HomeController::class, 'category'])->name('category');
Route::get('/brands/{brand_slug}', [App\Http\Controllers\HomeController::class, 'brands'])->name('brands');
Route::get('/details', [App\Http\Controllers\HomeController::class, 'detailProduct'])->name('detailproduct');


Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // INDEX ADMIN PANEL
    Route::get('dashboard', [App\Http\Controllers\Admin\AdminPanelController::class, 'index']);
    // CATEGORY
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('category', 'index');
        Route::get('category/add', 'create');
        Route::post('category/add', 'store');
        Route::get('category/{id}/edit', 'edit');
        Route::put('category/{id}/edit', 'update');
        Route::delete('category/{id}', 'destroy');
    });
    // PRODUCT
    Route::controller(App\Http\Controllers\Admin\ProductsController::class)->group(function () {
        Route::get('products', 'index');
        Route::get('products/add', 'create');
        Route::post('products/add', 'store');
        Route::get('products/{id}/edit', 'edit');
        Route::put('products/{id}/edit', 'update');
        Route::get('products/{id}/delete', 'destroyImage');
        Route::get('products/product/{id}/delete', 'destroy');
        Route::get('product-hastag/{id}/delete', 'destroyHastag');
    });


    // BRANDS
    Route::controller(App\Http\Controllers\Admin\BrandsController::class)->group(function () {
        Route::get('brands',  'index');
        Route::get('brands/add',  'create');
        Route::post('brands/add',  'store');
        Route::get('brands/{id}/edit',  'edit');
        Route::put('brands/{id}/edit',  'update');
        Route::delete('brands/brand/{id}/delete',  'destroy');
    });

    // VIDEO HOME
    Route::controller(App\Http\Controllers\Admin\HomeVideoController::class)->group(function () {
        Route::get('videos', 'index');
        Route::get('videos/add', 'create');
        Route::post('videos/add', 'store');
        Route::get('videos/{id}/edit', 'edit');
        Route::put('videos/{id}/edit', 'update');
        Route::delete('videos/video/{id}/delete', 'destroy');
    });

    // BANNER
    Route::controller(App\Http\Controllers\Admin\BannerController::class)->group(function () {
        Route::get('banner', 'index');
        Route::get('banner/add', 'create');
        Route::post('banner/add', 'store');
        Route::get('banner/{id}/edit', 'edit');
        Route::put('banner/{id}/edit', 'update');
        Route::delete('banner/{id}/delete', 'destroy');
    });
    Route::controller(App\Http\Controllers\Admin\HastagController::class)->group(function () {
        Route::get('hastags', 'index');
        Route::get('hastags/add', 'create');
        Route::post('hastags/add', 'store');
        Route::get('hastags/{id}/edit', 'edit');
        Route::put('hastags/{id}/edit', 'update');
        Route::delete('hastags/{id}/delete', 'destroy');
    });
});





// API AUTH

// Google
Route::get('auth/google', [App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'handleToGoogleCallback'])->name('auth.googleCallBack');
// // Facebook
// Route::get('auth/facebook', [App\Http\Controllers\Auth\FacebookController::class, 'redirectToFacebook'])->name('auth.facebook');
// Route::get('auth/facebook/callback', [App\Http\Controllers\Auth\FacebookController::class, 'handleToFacebookCallback'])->name('auth.facebookCallBack');
