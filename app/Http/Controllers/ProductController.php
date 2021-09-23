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
    public function oneProduct($id){
        // $product = Product::select('SELECT * FROM products WHERE id="1"');
        // return view('one-product')->with('id', $id);    
        
        // https://laravel.com/docs/8.x/eloquent#retrieving-single-models
        
        $product = Product::where('id', $id)->first();
        return view('one-product', ['product'=>$product]);
        // dd($product);
        // $product = Product::first();



        // return view('one-product', [
        //     'product' => $product,
        // ]);
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
