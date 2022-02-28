<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Request;

// 2 - CONTROLLER sans  view
class CartController extends Controller
{
    public function panier(){
        return 'Panier - Controller sans le view';
    }
}

// // 3 - Création de view en passant par le controller
// class CartController extends Controller
// {
//     public function panier(){
//         return view('cart');
//     }
// }