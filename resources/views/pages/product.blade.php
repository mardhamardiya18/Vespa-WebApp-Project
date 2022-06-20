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
                <div class="col-lg-3 col-6">
                    <div class="card">
                        <img src="/images/giorni.png" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">GTV SEI GIORNI</h5>
                            <a href="{{ route('product-detail') }}" class="btn btn-product">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card">
                        <img src="/images/gtssport.png" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">GTS 150 SUPER SPORT</h5>
                            <a href="{{ route('product-detail') }}" class="btn btn-product">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card">
                        <img src="/images/gtstech.png" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">GTS SUPER TECH 300</h5>
                            <a href="{{ route('product-detail') }}" class="btn btn-product">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6  mt-3 mt-lg-0">
                    <div class="card">
                        <img src="/images/spirintS.png" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">SPRINT S</h5>
                            <a href="{{ route('product-detail') }}" class="btn btn-product">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3">
                    <div class="card">
                        <img src="/images/sprint.png" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">SPRINT</h5>
                            <a href="{{ route('product-detail') }}" class="btn btn-product">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3">
                    <div class="card">
                        <img src="/images/S.png" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">S</h5>
                            <a href="{{ route('product-detail') }}" class="btn btn-product">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3">
                    <div class="card">
                        <img src="/images/LX.png" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">LX</h5>
                            <a href="{{ route('product-detail') }}" class="btn btn-product">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3">
                    <div class="card">
                        <img src="/images/primavera.png" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">PRIMAVERA</h5>
                            <a href="{{ route('product-detail') }}" class="btn btn-product">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3">
                    <div class="card">
                        <img src="/images/primaveraS.png" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">PRIMAVERA S</h5>
                            <a href="{{ route('product-detail') }}" class="btn btn-product">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
