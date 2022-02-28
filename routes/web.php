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
    return view('welcome');
});

Route::get('/product-list', function () {
    return view('product_list');
});

Route::get('/product-details', function () {
    return view('product_details');
});

Route::get('/product/{id}', function ($id) {
    return 'Produit' .$id;
});

Route::get('/cart', function () {
    return view('cart');
});
