<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Request;

// class ProductController extends Controller 
// {
//     public function product() {
//         return 'Produits - Controller sans le view';
//     }
// }

// 3 - CONTROLLER avec view
class ProductController extends Controller
{
    public function product() {
        return view('product_list');
    }
}
?>