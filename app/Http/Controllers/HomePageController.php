<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $sat = date("H");
        $trenutnoVreme = date("h:i:s");
        

        return view('welcome',compact('trenutnoVreme','sat'));
        
    }
}
