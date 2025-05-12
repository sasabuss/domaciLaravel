<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModel;

class ShopController extends Controller
{
      public function index()
    {

        $products = ProductsModel::all();
        
       return view("shop", compact("products")); 
    }
}
