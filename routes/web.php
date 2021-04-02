<?php

use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\FrontendProductController;
use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\CustomerController;

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



Route::get('/cart/show',[CartController::class,'index'])->name('cart.show');
Route::post('/cart/add',[CartController::class,'store'])->name('cart.add');
Route::post('/cart/update/{id}',[CartController::class,'update'])->name('cart.update');
Route::get('/cart/remove/{id}',[CartController::class,'destroy'])->name('cart.remove');

Route::post('/ajax/cart/add/',[CartController::class,'ajax_cart_add']);
Route::get('/ajax/get_cart_data',[CartController::class,'get_cart_data']);
Route::get('/ajax/cart/clear',[CartController::class,'ajax_cart_clear']);
Route::post('/ajax/cart/remove',[CartController::class,'ajax_cart_remove']);


Route::prefix('auth')->name('customer.')->group(function(){
    Route::post('/login',[CustomerController::Class,'login_form'])->name('login');
    Route::get('/login',[CustomerController::Class,'login'])->name('login.form');
    Route::post('/register',[CustomerController::Class,'reg_form'])->name('register.form');
    Route::get('/register',[CustomerController::Class,'register'])->name('register');
    Route::get('/logout',[CustomerController::class,'logout'])->name('logout');
});

Route::get('/customer',[CustomerController::class,'index'])->name('customer');


Route::get('all-products', [FrontendProductController::class,'index']);
Route::post('load-more-data', [FrontendProductController::class,'load_more_data'])->name('load_more_data');


require __DIR__.'/auth.php';
require __DIR__.'/backend.php';
