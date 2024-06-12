<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KeuntunganController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\SatuanController;
use App\Models\Keuntungan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.auth-login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function(){
        return view('pages.dashboard');
    })->name('home');

    Route::resource('satuan', SatuanController::class);
    Route::resource('product', ProductController::class);
    Route::resource('product-detail', ProductDetailController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('keuntungan', KeuntunganController::class);
    Route::get('product/{id}/product-detail', [ProductController::class, 'editProductDetail'])->name('product.edit.product-detail');
});
