<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Request;

class ProductController extends Controller 
{
    public function product() {
        return 'Produits - Controller sans le view';
    }
}
?>