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
        return redirect()->route('products.index')->with('success','');
    }
}
