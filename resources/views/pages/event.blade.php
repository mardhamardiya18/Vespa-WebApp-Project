@extends('layouts.app')

@section('title')
    Event - Vespa Indonesia
@endsection

@section('content')
    <section class="event mt-5">
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
                <div class="col-12">
                    <div class="card p-3">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-6">
                                <img src="/images/event1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3 col-md-6 mt-3 mt-sm-0 text-center text-sm-start">
                                <h5 class="card-title">PT PIAGGIO INDONESIA RAYAKAN BULAN RAMADAN PENUH BERBAGI DAN
                                    KEBERSAMAAN BERSAMA PECINTA OTOMOTIF PREMIUM RODA DUA</h5>
                            </div>
                            <div class="col-lg-3 col-md-5 mt-3 mt-lg-0 text-center">
                                <p>Jakarta,Surabaya,Yogyakarta, dan Bali</p>
                            </div>
                            <div class="col-lg-2 col-md-3 text-center mt-3 mt-lg-0">
                                <p>22 April 2022</p>
                            </div>
                            <div class="col-lg-1 col-md-4 text-center mt-3 mt-lg-0">
                                <a href="#"><i class='bx bx-chevron-right-circle bx-sm'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card p-3">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-6">
                                <img src="/images/pencapaian1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3 col-md-6 mt-3 mt-sm-0 text-center text-sm-start">
                                <h5 class="card-title">DEALER MOTOPLEX ICONIC 4 BRANDS PT PIAGGIO INDONESIA KINI HADIR DI
                                    DAERAH ISTIMEWA YOGYAKARTA</h5>
                            </div>
                            <div class="col-lg-3 col-md-5 mt-3 mt-lg-0 text-center">
                                <p>Yogyakarta</p>
                            </div>
                            <div class="col-lg-2 col-md-3 text-center mt-3 mt-lg-0">
                                <p>1 Mei 2022</p>
                            </div>
                            <div class="col-lg-1 col-md-4 text-center mt-3 mt-lg-0">
                                <a href="#"><i class='bx bx-chevron-right-circle bx-sm'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card p-3">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-6">
                                <img src="/images/pencapaian4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3 col-md-6 mt-3 mt-sm-0 text-center text-sm-start">
                                <h5 class="card-title">PT PIAGGIO INDONESIA MERAYAKAN HARI JADINYA YANG KE 10 DI INDONESIA
                                </h5>
                            </div>
                            <div class="col-lg-3 col-md-5 mt-3 mt-lg-0 text-center ">
                                <p>Jakarta</p>
                            </div>
                            <div class="col-lg-2 col-md-3 text-center mt-3 mt-lg-0">
                                <p>12 Mei 2022</p>
                            </div>
                            <div class="col-lg-1 col-md-4 text-center mt-3 mt-lg-0">
                                <a href="#"><i class='bx bx-chevron-right-circle bx-sm'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
