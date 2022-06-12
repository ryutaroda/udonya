<?php

use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\ShopMenuController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Site\ShopController as SiteShopController;
use App\Http\Controllers\Site\TopController as SiteTopController;
use App\Http\Controllers\Site\InquiryController as SiteInquiryController;
use App\Http\Controllers\Site\PageController;
use App\Http\Controllers\Admin\InquiryController as AdminInquiryController;
use Illuminate\Support\Facades\Route;

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

/**
 * サイト画面
 */
Route::name('site.')->group(function () {
    Route::controller(SiteTopController::class)->group(function () {
        Route::get('/', 'top')->name('top');
    });
    Route::controller(SiteShopController::class)->name('shop.')->group(function () {
        Route::get('/search', 'index')->name('index');
        Route::get('/udons/{shop}', 'show')->name('show');
    });
    Route::resource('inquiries', SiteInquiryController::class)
        ->only(['create', 'store']);
    Route::controller(PageController::class)->prefix('pages')->name('pages.')->group(function () {
        Route::get('/privacy-policy', 'privacyPolicy')->name('privacy_policy');
        Route::get('/terms-of-service', 'termsOfService')->name('terms_of_service');
    });
});

/**
 * 管理画面
 */
Route::middleware(['auth', 'admin.access_limit'])->prefix('admin')->name('admin.')->group(function () {
    Route::controller(UserController::class)->name('user.')->group(function () {
        Route::get('/users', 'index')->name('index');
    });

    Route::controller(ShopController::class)->name('shop.')->group(function () {
        Route::get('/shops', 'index')->name('index');
        Route::get('/shop/create', 'create')->name('create');
        Route::post('/shop/store', 'store')->name('store');
        Route::get('/shop/{shop}/edit', 'edit')->name('edit');
        Route::post('/shop/{shop}/update', 'update')->name('update');
    });
    Route::controller(ShopMenuController::class)->name('shop_menu.')->group(function () {
        Route::get('/shop/{shop}/menus', 'index')->name('index');
        Route::get('/shop/{shop}/menu/create', 'create')->name('create');
        Route::post('/shop/{shop}/menu/store', 'store')->name('store');
        Route::get('/shop/{shop}/menu/{shopMenu}/edit', 'edit')->name('edit');
        Route::post('/shop/{shop}/menu/{shopMenu}/update', 'update')->name('update');
    });

    Route::resource('inquiries', AdminInquiryController::class)->only([
        'index'
    ]);
});


require __DIR__ . '/auth.php';
