<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestiController extends Controller
{
    public function index()
    {
        $testies = Testimonial::with(['user', 'product'])->latest()->get();
        return view('pages.testimoni', [
            'testies' => $testies,

        ]);
    }

    public function create()
    {
        $products = Product::latest()->get();

        return view('pages.testiCreate', [

            'products' => $products,
        ]);
    }

    public function store(Request $request)
    {
        $item = $request->all();

        Testimonial::create($item);

        toast('Terimakasih testimoni anda telah ditambahkan👍', 'success');

        return redirect(route('testimoni'));
    }
}