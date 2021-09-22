<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductModelController extends Controller
{
    
    public function show($name){
        $product = Product::where('name', $name)->first();
        
        // $truc = \DB::table('products')->where('name', $name)->first();
        
        // return view('product-list');
        // // dd($truc);
    }
}

// CONTROLLER SIMPLE
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class ProductController extends Controller
// {
//     public function listProduct()
//     {
//         return ('Product');
//     }
//     public function ficheProduct($n)
//     {
//         return ('Product ' . $n);
//     }
// }
