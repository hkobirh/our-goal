<?php
use App\Http\Controllers\Staff\CategoryController;
use App\Http\Controllers\Staff\BrandController;
use App\Http\Controllers\Staff\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('staff')->name('staff.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    # brands Route
   # Route::get('/brands', [BrandController::class, 'index'])->name('brands');
    Route::resource('brand',BrandController::class);
    Route::resource('category',CategoryController::class);
});

