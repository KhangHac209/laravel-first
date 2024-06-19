<?php

use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('home', [HomeController::class, 'index'])->name('home');
Route::post('cart/add-product', [CartController::class, 'add'])->name('cart.add.product');
Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::get('cart/delete-cart', [CartController::class, 'destroy'])->name('cart.destroy');
