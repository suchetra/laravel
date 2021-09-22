<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;


class ProductController extends Controller
{
    public function listProduct()
    {
        return view('product-list');
    }
    public function ficheProduct($n)
    {
        return view('product-details')->with('numero', $n);    
    }
    public function oneProduct(){
        $products = Product::all();

        return view('one-product', [
            'products' => $products,
        ]);
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
