<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function(){
        return view('pages.dashboard');
    })->name('home');
});
