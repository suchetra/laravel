<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return ('Product');
    }
    public function indexId($n)
    {
        return ('Product ' . $n);
    }
}
