<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('featured',false)->take(1)->get();
        return view('products.index')->with('products', $products);

    }
    
    
}


