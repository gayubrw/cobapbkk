<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['index', 'show']);
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $products = Product::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', "%{$search}%");
        })->paginate(8);

        if ($request->ajax()) {
            return response()->json([
                'products' => view('products.partials.product-list', compact('products'))->render(),
                'pagination' => $products->links()->toHtml()
            ]);
        }

        return view('products.index', compact('products', 'search'));
    }

    public function create()
    {
        return view('products.create') ;
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan produk
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Logika untuk memperbarui produk
    }

    public function destroy(Product $product)
    {
        // Logika untuk menghapus produk
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}