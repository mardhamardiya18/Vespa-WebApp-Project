@extends('layouts.app')

@section('title')
    Blog Detail
@endsection

@section('content')
    <section class="content artikel">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('artikel') }}" class="text-primary">Artikel</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">vespa</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-8">
                    <div class="row row-title">
                        <div class="col-12">
                            <h1 class="title">Motor Klasik yang Semakin Nyentrik</h1>
                        </div>
                    </div>
                    <div class="row justify-content-between mt-2 row-author">
                        <div class="col-sm-8 d-flex align-items-center">
                            <div class="author d-flex align-items-center">
                                <i class="bx bx-user"></i>
                                <p class="name m-0 ms-2 text-muted">Mardha Mardiya</p>
                            </div>
                            <p class="date m-0 text-muted ms-5">
                                3 minggu yang lalu</p>

                        </div>
                        <div class="col-sm-2 mt-4 mt-sm-0 sosmed">
                            <a href="#"><i class="bx bxl-whatsapp"></i></a>
                            <a href="#"><i class="bx bxl-facebook"></i></a>
                            <a href="#"><i class="bx bxl-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row row-body mt-5">
                        <div class="col-12">
                            <img src="/images/blog-detail.png" class="img-fluid rounded-lg" alt="" />
                        </div>
                        <hr>
                        <div class="col-12 mt-5 col-body">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, minima dignissimos natus
                                corrupti error ducimus consequatur voluptate eum quasi dolorum maiores aspernatur quam
                                perferendis dolore molestiae pariatur porro ab nemo sapiente ea iste dolor numquam aut enim.
                                Ex, repellat laudantium.</p>

                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, minima dignissimos natus
                                corrupti error ducimus consequatur voluptate eum quasi dolorum maiores aspernatur quam
                                perferendis dolore molestiae pariatur porro ab nemo sapiente ea iste dolor numquam aut enim.
                                Ex, repellat laudantium.</p>
                        </div>
                        <hr>
                        <div class="row mt-5">
                            <h2>Artikel Lainnya</h2>
                            <div class="col-md-4 mt-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="/images/blog2.png" class=" img-fluid w-100 rounded-lg" alt="">
                                        <a href="#" class=" d-inline-block mt-3">Lorem ipsum dolor sit amet.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="/images/blog3.png" class=" img-fluid w-100 rounded-lg" alt="">
                                        <a href="#" class=" d-inline-block mt-3">Lorem ipsum dolor sit amet.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="/images/blog4.png" class=" img-fluid w-100 rounded-lg" alt="">
                                        <a href="#" class=" d-inline-block mt-3">Lorem ipsum dolor sit amet.</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
