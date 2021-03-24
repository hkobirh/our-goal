<?php
use App\Http\Controllers\Staff\CategoryController;
use App\Http\Controllers\Staff\BrandController;
use App\Http\Controllers\Staff\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Staff\ProductController;

Route::prefix('staff')->name('staff.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    # brands Route
    # Route::get('/brands', [BrandController::class, 'index'])->name('brands');
    Route::resource('brand',BrandController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('product',ProductController::class);
    Route::post('product/update/{id}',[ProductController::class,'update'])->name('product.update');
    Route::post('product/fetch_data',[ProductController::class,'fetch_data'])->name('product.fetch.data');
    Route::post('product/delete',[ProductController::class,'delete'])->name('product.delete');
    Route::post('product/update-status',[ProductController::class,'update_status'])->name('product.status');
    Route::post('product/featured/{id}',[ProductController::class,'featured'])->name('product.featured');
    Route::post('product/update-price/{id}',[ProductController::class,'update_price'])->name('product.update.price');
});
