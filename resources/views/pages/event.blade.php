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
                @foreach ($events as $event)
                    <div class="col-12">
                        <div class="card p-3">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-6">
                                    <img src="{{ Storage::url($event->photos) }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-3 col-md-6 mt-3 mt-sm-0 text-center text-sm-start">
                                    <h5 class="card-title">{{ $event->name }}</h5>
                                </div>
                                <div class="col-lg-3 col-md-5 mt-3 mt-lg-0 text-center">
                                    <p>{{ $event->place }}</p>
                                </div>
                                <div class="col-lg-2 col-md-3 text-center mt-3 mt-lg-0">
                                    <p>{{ $event->begin }}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
