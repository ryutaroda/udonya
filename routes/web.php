<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/sample1', [SampleController::class, 'sample1']);
    Route::get('/sample/menu', [SampleController::class, 'menu']);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/sample/alerts', [SampleController::class, 'alerts'])->name('sample.alerts');
    Route::get('/sample/accordion', [SampleController::class, 'accordion'])->name('sample.accordion');
    Route::get('/sample/avatar', [SampleController::class, 'avatar'])->name('sample.avatar');
    Route::get('/sample/badge', [SampleController::class, 'badge'])->name('sample.badge');
    Route::get('/sample/breadcrumb', [SampleController::class, 'breadcrumb'])->name('sample.breadcrumb');
});


require __DIR__ . '/auth.php';
