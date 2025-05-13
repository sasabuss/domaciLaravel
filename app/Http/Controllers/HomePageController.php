<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModel;

class HomePageController extends Controller
{
    public function index()
    {
        $sat = date("H");
        $trenutnoVreme = date("h:i:s");

        $products = ProductsModel::orderByDesc('id')
            ->take(6)
            ->get();

        
        

        return view('welcome',compact('trenutnoVreme','sat','products'));
        
    }
}
