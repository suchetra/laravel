<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct()
    {
        return ('Product');
    }
    public function ficheProduct($n)
    {
        return ('Product ' . $n);
    }
}
