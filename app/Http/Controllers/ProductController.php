<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;


class ProductController extends Controller
{
    public function listProduct()
    {
        $products = Product::all();
        return view('product-list', [
            'products' => $products,
        ]);
    }
    public function ficheProduct($n)
    {
        return view('product-details')->with('numero', $n);    
    }
    public function show(){
        $products = Product::all();

        return view('product-list', [
            'products' => $products,
        ]);
    }
    public function orderAlpha(){
        // $products = Product::sortBy('name')->all();
        $products = Product::orderBy('name', 'desc')->get();
        // wrong :
        // $products = Product::all()
        //         ->sortBy('name');
        return view('product-list', [
            'products' => $products,
        ]);
    }
    public function orderPrice(){

        $products = Product::orderBy('price')->get();

        return view('product-list', [
            'products' => $products,
        ]);
    }
    public function oneProduct($id){
        
        // https://laravel.com/docs/8.x/eloquent#retrieving-single-models
        
        $product = Product::where('id', $id)->first();
        return view('product-details', ['product'=>$product]);
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
