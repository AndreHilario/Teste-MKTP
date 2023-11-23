<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', ['products'=> $products]);
    }
    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'id_code'=> 'required|regex:/^\w+$/i', 
            'name'=> 'required|string',
            'url'=> 'required|url', 
            'price'=> 'required|numeric|min:0',
            'cep'=> ['required', 'regex:/^\d{5}-\d{3}$/'], 
        ]);

        $newProduct = Product::create($data);
        return redirect()->route('product.index')->with('success', $newProduct);
    }

    public function edit(Product $product) {
        return view('products.edit', ['product'=> $product]);
    }

    public function update(Product $product, Request $request) {
        $data = $request->validate([
            'id_code'=> 'required|regex:/^\w+$/i', 
            'name'=> 'required|string',
            'url'=> 'required|url', 
            'price'=> 'required|numeric|min:0',
            'cep'=> ['required', 'regex:/^\d{5}-\d{3}$/'], 
        ]);

        $product->update($data);

        return redirect()->route('product.index')->with('success','Produto atualizado com sucesso!');
    }
}
