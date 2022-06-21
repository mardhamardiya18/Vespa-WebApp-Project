@extends('layouts.app')

@section('title')
    Produk Kami
@endsection

@section('content')
    <section class="product mt-5">
        <div class="container">
            <div class="row title-section text-center">
                <div class="col-12">
                    <h1>Our Product</h1>
                </div>
            </div>
            <div class="row row-product mt-5">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-6">
                        <div class="card">
                            <img src="{{ Storage::url($product->gallery->first()->photos) }}" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title mb-3">{{ $product->name }}-{{ $product->seri }}</h5>
                                <a href="{{ route('product-detail', $product->id) }}" class="btn btn-product">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
