<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * 
     */
    public function index(Product $product)
    {
        return view('index',[
            'products' => $product->getAllProducts(),
        ]);
    }
}
