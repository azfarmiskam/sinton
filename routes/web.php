<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// About Us Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Products Overview Page
Route::get('/products', function () {
    return view('products.index');
})->name('products');

// Products - Trade Page
Route::get('/products/trade', function () {
    return view('products.trade');
})->name('products.trade');

// Products - Investments Page
Route::get('/products/investments', function () {
    return view('products.investments');
})->name('products.investments');

// Contact Us Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
