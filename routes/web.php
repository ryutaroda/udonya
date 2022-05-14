<?php

use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Site\ShopController as SiteShopController;
use App\Http\Controllers\Site\TopController as SiteTopController;
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
});

/**
 * 管理画面
 */
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
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
});


require __DIR__ . '/auth.php';
