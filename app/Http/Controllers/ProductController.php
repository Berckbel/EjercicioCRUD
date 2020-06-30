<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\ProductRequest;

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

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();

        return back()->with('info','El producto fue eliminado');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('products.edit',compact('product'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(ProductRequest $request){
        return 'Producto Guardado';
    }

    public function update(ProductRequest $request, $id){
        return 'Producto Actualizado' . $id;
    }
}
