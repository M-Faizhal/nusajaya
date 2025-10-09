<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Products/Services Page
Route::get('/produk-jasa', [ProductController::class, 'index'])->name('products');
Route::get('/produk-jasa/{slug}', [ProductController::class, 'show'])->name('products.show');

// Artikel Pages
Route::get('/artikel', [BlogController::class, 'index'])->name('artikel');
Route::get('/artikel/{slug}', [BlogController::class, 'show'])->name('artikel.show');

// Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
