<?php
namespace App\Http\Controllers; // name space est le nom complet avec le chemin

use App\Http\Controllers\Request;

// 2 - CONTROLLER sans view
class HomeController extends Controller{ 
    public function index(){
        return 'Home Page - Controller sans utiliser les view';
    }
}