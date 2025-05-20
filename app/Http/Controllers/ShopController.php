<?php

namespace App\Http\Controllers;

use App\Models\ShopModel;
use Illuminate\Http\Request;
use App\Models\ProductsModel;

class ShopController extends Controller
{
      public function index()
    {

        $products = ProductsModel::all();

       return view("/shop", compact("products"));
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            "name"=>"required|string",
            "description"=>"required|string|min:5",
            "amount"=>"required|integer",
            "price"=>"required|integer",
            "image"=>"required|string",
        ]);


        ProductsModel::create([
            "name" => $request->get("name"),
            "description" => $request->get("description"),
            "amount" => $request->get("amount"),
            "price" => $request->get("price"),
            "image" => $request->get("image"),

        ]);

        return redirect("/admin/products");


    }

    public function listProducts()
    {
        $allProducts = ProductsModel::all();
        return view("/admin/products",compact("allProducts"));

    }

}
