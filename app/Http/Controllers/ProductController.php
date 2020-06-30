<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderby('id','DESC')->paginate();
        return view('products.index',compact('products'));
    }

    public function show($id){
        $product = Product::find($id);
        return view('products.show',compact('product'));
    }
}