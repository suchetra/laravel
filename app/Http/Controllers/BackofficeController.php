<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;



class ProductModelController extends Controller
{
    public function add(){
        $products = Product::all();

        return view('productModel', [
            'products' => $products,
        ]);
    }
    
    // dd($truc);
}
