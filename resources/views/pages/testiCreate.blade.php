@extends('layouts.app')

@section('title')
    Testimoni
@endsection

@section('content')
    <section class="form-testi mt-5">
        <div class="container">
            <div class="row title-section text-center">
                <div class="col-12">
                    <h1>Berikan Testimoni anda dibawah ini😃</h1>
                </div>
            </div>
            <div class="row row-visi mt-5">
                <div class="col-lg-6 mx-auto">
                    <form action="{{ route('testimoniStore') }}" method="POST" enctype="multipart/form-data"
                        id="contactForm">
                        @csrf

                        <input type="hidden" name="users_id" value="{{ Auth::user()->id }}" id="">

                        <div class="mb-3">
                            <select name="products_id" class="form-control" id="">
                                <option value="" selected disabled class="text-muted">--Produk Yang Dipesan---
                                </option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }} - {{ $product->seri }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Message input -->
                        <div class="mb-3">
                            <textarea class="form-control" name="content" id="message" type="text" placeholder="Berikan komentar anda disini😇"
                                style="height: 10rem" required></textarea>
                        </div>

                        {{-- rating start --}}
                        <p>Berikan ratingmu</p>
                        <div class="rating d-flex flex-row-reverse justify-content-end">
                            <input name="rate" required value="sangat puas banget" id="e5" type="radio"><label
                                title="Sangat Puas Banget" for="e5">★</label>
                            <input name="rate" required value="puas banget" id="e4" type="radio"><label
                                title="Puas Banget" for="e4">★</label>
                            <input name="rate" required value="puas" id="e3" type="radio"><label
                                title="Puas" for="e3">★</label>
                            <input name="rate" required value="kurang puas" id="e2" type="radio"><label
                                title="Kurang Puas" for="e2">★</label>
                            <input name="rate" required value="tidak puas" id="e1" type="radio"><label
                                title="Tidak Puas" for="e1">★</label>
                        </div>
                        {{-- rating end --}}

                        <!-- Form submit button -->
                        <div class="d-grid mt-4">
                            <button class="btn btn-success" type="submit">
                                Kirim
                            </button>
                            <a href="{{ route('homepage') }}" class="btn text-center mt-3">Kembali ke halaman
                                utama</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
