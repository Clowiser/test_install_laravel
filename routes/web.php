<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;



// Route::get('/', function () { -> route avec la méthode get car on travaille avec l'URL + / de l'url et la fonction qui est appelée et exécutée
//     return view('welcome'); -> il retourne la vue(view) 'welcome.blade.php avec les informations HTML et autres qui sont dedans
// });



// 1 - Router Sans & Avec le view
// Route::get('/', function () {
//     return view('welcome'); -> on retourne la view
// });

// Route::get('/', function () {
//     return 'Home page - Route sans utiliser les views'; // -> on retourne directement ce que l'on veut retourner en le notant 'Home page - sans utiliser les views'
// });

// Route::get('/product-list', function () {
//     return view('product_list');
// });

// // Route::get('/product-details', function () {
// //     return view('product_details');
// // });

// Route::get('/product/{id}', function ($id) { // -> argument dynamique
//     return 'Produit' .$id;
// });

// Route::get('/cart', function () {
//     return view('cart');
// });



// 2 - CONTROLLER
Route::get('/', [HomeController::class, 'index']);

Route::get('/cart', [CartController::class, 'panier']);

Route::get('/product', [ProductController::class, 'products']);

Route::get('/product/{id}', [ProductController::class, 'IdProduct']);



// 3 - VIEWS sans passer par le controller
// Route::get('/', function () {
//     return view('welcome') ; //
// });

// Route::get('/product', function () {
//     return view('product_list');
// });

// Route::get('/product/{id}', function ($id) {
//     return view('product_details')->withNumero($id);
// })->where('id', '[0-9]+');

// Route::get('/cart', function () {
//     return view('cart');
// });
