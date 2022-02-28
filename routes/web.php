<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

// 1 - Router Sans & Avec le view
// Route::get('/', function () {
//     return view('welcome'); -> on retourne la view
// });

Route::get('/', function () {
    return 'Home page - Route sans utiliser les views'; // -> on retourne directement ce que l'on veut retourner en le notant 'Home page - sans utiliser les views'
});


Route::get('/product-list', function () {
    return view('product_list');
});

// Route::get('/product-details', function () {
//     return view('product_details');
// });

Route::get('/product/{id}', function ($id) { // -> argument dynamique
    return 'Produit' .$id;
});


Route::get('/cart', function () {
    return view('cart');
});

// 2 - CONTROLLER sans view


Route::get('/', [HomeController::class, 'index']);

Route::get('/cart', [CartController::class, 'panier']);

Route::get('/productos', [ProductController::class, 'product']);
