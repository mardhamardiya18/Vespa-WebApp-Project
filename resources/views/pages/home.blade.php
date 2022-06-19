@extends('layouts.app')

@section('title')
    Homepage | Vespa Indonesia
@endsection

@section('content')
    {{-- Header Start --}}
    <section class="header">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="/images/banner-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="/images/banner-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="/images/banner-1.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Header End --}}

    {{-- Banner Start --}}
    <section class="banner mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="#"> <img src="/images/dior.jpg" class="img-fluid" alt=""></a>

                </div>
                <div class="col-md-6 text-end mt-3 mt-sm-0">
                    <a href="#"><img src="/images/configurator.jpg" class="img-fluid" alt=""></a>

                </div>
            </div>
        </div>
    </section>
    {{-- Banner End --}}

    {{-- Product Start --}}
    <section class="product">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="title-section">Stylish Motorcyle</h1>
                    <p>Pilih Model Kesukaan Anda</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-6">
                    <div class="card border-0">
                        <img src="/images/giorni.png" class="img-fluid" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">GTV SEI GIORNI</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card border-0">
                        <img src="/images/gtstech.png" class="img-fluid" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">GTS SUPER TECH 300</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card border-0">
                        <img src="/images/gtssport.png" class="img-fluid" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">GTS 150 SUPER SPORT 150</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card border-0">
                        <img src="/images/spirintS.png" class="img-fluid" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">SPRINT S</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-CTA w-75 py-3">BOOK NOW</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Product End --}}
@endsection
