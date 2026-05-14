<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'required|image|max:2048'
        ]);

        $path = $request->file('image')->store(
            'products',
            's3'
        );

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path
        ]);

        return redirect()
            ->route('products.index')
            ->with('success', 'Produto criado!');
    }
}