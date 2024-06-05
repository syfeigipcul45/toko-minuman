<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\SatuanController;
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
});
