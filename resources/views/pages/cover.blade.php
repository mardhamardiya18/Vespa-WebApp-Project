@extends('layouts.app')

@section('title')
    Cover Website
@endsection

@section('content')
    <section class="visimisi mt-5">
        <div class="container">
            <div class="row title-section text-center">
                <div class="col-12">
                    <h1>COVER WEBSITE PROJECT</h1>
                </div>
            </div>
            <div class="row row-visi mt-5 text-center">
                <div class="col-12">
                    <p>Judul</p>
                    <h1 class=" fw-bold">WEBSITE PERUSAHAAN VESPA INDONESIA</h1>
                </div>
                <div class="col-12">
                    <p>Segala konten yang tercantum pada website ini merupakan konten asli pada <a
                            href="https://vespa.co.id/">Website resmi vespa</a></p>
                </div>
                <div class="col-12">
                    <a href="{{ route('homepage') }}" class="btn btn-success">Lanjutkan</a>
                </div>
            </div>
        </div>
    </section>
@endsection
