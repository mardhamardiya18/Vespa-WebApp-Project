<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function product()
    {
        $products = Product::with('gallery')->latest()->get();

        return view('pages.product', [
            'products' => $products
        ]);
    }

    public function productDetail($id)
    {
        $product = Product::with(['specification', 'gallery'])->findOrFail($id);

        return view('pages.product-detail', [
            'product' => $product,
        ]);
    }
}