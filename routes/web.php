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

// Blog Pages
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
