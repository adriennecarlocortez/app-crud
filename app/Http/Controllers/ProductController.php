<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //Product Index
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    //Product Create
    public function create(){
        return view('products.create');
    }

    //Product Store
    public function store(Request $request){
        //dd($request)
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $newProduct = Product::create($data);
        // dd($newProduct)        

        return redirect(route('product.index'));
    }

    //Product Edit
    public function edit(Product $product){
        // dd($product);
        return view ('products.edit', ['product' => $product]);
    }

    //Product Update
    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Successfully');
    }

    //Product Destroy
    public function destroy(Product $product){
        $product->delete();

        return redirect(route('product.index'))->with('success', 'Product Deleted Successfully');

    }
}
