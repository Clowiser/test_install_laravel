<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Request;

// 2 - CONTROLLER sans view
// class ProductController extends Controller 
// {
//     public function product() {
//         return 'Listes des produits - Controller sans le view';
//     }

//     //produit détails
//     public function IdProduct($id){
//     return 'Produit' .$id;
//     }
// }

// 3 - CONTROLLER avec view
class ProductController extends Controller
{
        public function products() {
            return view('product_list');
        }

        // public function IdProduct($id){
        //     return view('product_details')->withNumero($id);
        // }

        // système de clé => valeur afin d'utiliser la clé dans le reste du code
        public function IdProduct($id){
            return view('product_details', ['name' => $id]);
        }
}
?> 