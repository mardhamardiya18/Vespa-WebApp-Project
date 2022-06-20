@extends('layouts.app')

@section('title')
    Event - Vespa Indonesia
@endsection

@section('content')
    <section class="artikel mt-5">
        <div class="container">
            <div class="row title-section text-center">
                <div class="col-12">
                    <h1>Kumpulan Event Vespa Indonesia</h1>
                    <p>Agenda kegiatan</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari event untuk vespa indonesia..."
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-success d-flex justify-content-center align-items-center p-2"
                            type="button" id="button-addon2"><i class='bx bx-search bx-sm'></i></button>
                    </div>
                </div>
            </div>
            <div class="row row-contact mt-5">
                <div class="col-lg-3">
                    <div class="card">
                        <img src="/images/blog1.png" class="img-fluid" alt="">
                        <div class="card-body">
                            <div class=" d-flex justify-content-between align-items-center">
                                <div class="author d-flex align-items-center">
                                    <i class='bx bx-user'></i>
                                    <p class="ms-1">Mardha Mardiya</p>
                                </div>
                                <div class="create d-flex align-items-center">
                                    <i class='bx bx-time-five'></i>
                                    <p class="ms-1">3 Minggu yang lalu</p>
                                </div>
                            </div>
                            <h5 class="card-title mt-3">Motor Klasik yang Semakin Nyentrik</h5>
                            <a href="#" class=" d-inline-block mt-3">Lihat selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="/images/blog2.png" class="img-fluid" alt="">
                        <div class="card-body">
                            <div class=" d-flex justify-content-between align-items-center">
                                <div class="author d-flex align-items-center">
                                    <i class='bx bx-user'></i>
                                    <p class="ms-1">Mardha Mardiya</p>
                                </div>
                                <div class="create d-flex align-items-center">
                                    <i class='bx bx-time-five'></i>
                                    <p class="ms-1">4 Minggu yang lalu</p>
                                </div>
                            </div>
                            <h5 class="card-title mt-3">Deretan Selebriti Indonesia Penggemar Vespa</h5>
                            <a href="#" class=" d-inline-block mt-3">Lihat selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="/images/blog3.png" class="img-fluid" alt="">
                        <div class="card-body">
                            <div class=" d-flex justify-content-between align-items-center">
                                <div class="author d-flex align-items-center">
                                    <i class='bx bx-user'></i>
                                    <p class="ms-1">Mardha Mardiya</p>
                                </div>
                                <div class="create d-flex align-items-center">
                                    <i class='bx bx-time-five'></i>
                                    <p class="ms-1">3 Minggu yang lalu</p>
                                </div>
                            </div>
                            <h5 class="card-title mt-3">Berkenalan dengan Vespa di Indonesia</h5>
                            <a href="#" class=" d-inline-block mt-3">Lihat selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="/images/blog4.png" class="img-fluid" alt="">
                        <div class="card-body">
                            <div class=" d-flex justify-content-between align-items-center">
                                <div class="author d-flex align-items-center">
                                    <i class='bx bx-user'></i>
                                    <p class="ms-1">Mardha Mardiya</p>
                                </div>
                                <div class="create d-flex align-items-center">
                                    <i class='bx bx-time-five'></i>
                                    <p class="ms-1">3 Minggu yang lalu</p>
                                </div>
                            </div>
                            <h5 class="card-title mt-3">Vespa Adalah Seni</h5>
                            <a href="#" class=" d-inline-block mt-3">Lihat selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
