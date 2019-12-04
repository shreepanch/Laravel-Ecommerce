<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function site()
    {
        $products = Product::limit(10)->get();

        // return view('welcome',compact('products'));

        // return view('welcome')->withProducts($products);

        return view('welcome')->with([
            'products' => $products
        ]);
    }
    public function welcome()
    {
    }
}
