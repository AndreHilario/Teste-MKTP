<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdate;
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

    public function store(StoreUpdate $request) {
        $validatedData = $request->validated();

        $newProduct = Product::create($validatedData);

        if (config('app.env') === 'production') {
            return redirect()->route('product.index')->with('success', 'Produto criado com sucesso!');
        } else {
            // Return to development environment
            return response()->json(['success' => true, 'message' => 'Produto criado com sucesso!']);
        }
    }

    public function edit(Product $product) {
        return view('products.edit', ['product'=> $product]);
    }

    public function update(Product $product, StoreUpdate $request) {
        $data = $request->all();

        $product->update($data);

        if (config('app.env') === 'production') {
            return redirect()->route('product.index')->with('success', 'Produto atualizado com sucesso!');
        } else {
            // Return to development environment
            return response()->json(['success' => true, 'message' => 'Produto atualizado com sucesso!']);
        }
    }

    public function delete(Product $product) {
        $product->delete();
        return redirect()->route('product.index')->with('success','Produto deletado com sucesso!');
    }
}
