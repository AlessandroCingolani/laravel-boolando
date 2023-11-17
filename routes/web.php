<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/donna', function () {
    $products = config('products');
    $product_donna = array_filter($products, fn ($product) => $product['gender'] === 'donna');
    if (empty($product_donna)) {
        abort(404);
    }
    return view('donna', compact('product_donna'));
})->name('donna');

Route::get('/uomo', function () {
    $products = config('products');
    $product_uomo = array_filter($products, fn ($product) => $product['gender'] === 'uomo');
    if (empty($product_uomo)) {
        abort(404);
    }
    return view('uomo', compact('product_uomo'));
})->name('uomo');

Route::get('/bambino', function () {
    $products = config('products');
    $product_bambino = array_filter($products, fn ($product) => $product['gender'] === 'bambino');
    if (empty($product_bambino)) {
        abort(404);
    }

    return view('bambino', compact('product_bambino'));
})->name('bambino');

Route::get('/dettagli-prodotto/{slug}', function ($slug) {
    $products = config('products');
    $product_array = array_filter($products, fn ($product) => $product['slug'] === $slug);
    if (empty($product_array)) {
        abort(404);
    }
    $product = $product_array[array_key_first($product_array)];
    return view('productDetail', compact('product'));
})->name('productDetail');
