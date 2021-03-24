<?php

use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Staff\DashboardController;
use App\Http\Controllers\TestController;

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

Route::get('/', [SiteController::class,'index'])->name('index');
Route::get('/products/{slug1}/{slug2}/{slug3?}', [SiteController::class,'products'])->name('products');
Route::get('/product/{slug}', [SiteController::class,'product'])->name('product');
Route::post('/product-quick-view/{slug}', [SiteController::class,'product_quick_view'])->name('product.quick.view');
Route::get('/brand/{slug}', [SiteController::class,'brand'])->name('brand');

require __DIR__.'/auth.php';
require __DIR__.'/backend.php';
