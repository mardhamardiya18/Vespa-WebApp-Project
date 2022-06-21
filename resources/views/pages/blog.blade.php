@extends('layouts.app')

@section('title')
    Blog - Vespa Indonesia
@endsection

@section('content')
    <section class="artikel mt-5">
        <div class="container">
            <div class="row title-section text-center">
                <div class="col-12">
                    <h1>Temukan pengalaman anda disini</h1>
                    <p>Kumpulan artikel otomotif</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('artikel') }}">

                        <div class="input-group mb-3">

                            <input type="text" class="form-control" placeholder="Cari artikel anda disini.."
                                aria-label="Recipient's username" name="keyword" aria-describedby="button-addon2"
                                value="{{ $keyword }}">
                            <button class="btn btn-outline-success d-flex justify-content-center align-items-center p-2"
                                type="submit" id="button-addon2"><i class='bx bx-search bx-sm'></i></button>


                        </div>
                    </form>
                </div>
            </div>
            <div class="row row-contact mt-5">
                @foreach ($posts as $post)
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="{{ Storage::url($post->thumbnail) }}" class="img-fluid" alt="">
                            <div class="card-body">
                                <div class=" d-flex justify-content-between align-items-center">
                                    <div class="author d-flex align-items-center">
                                        <i class='bx bx-user'></i>
                                        <p class="ms-1">{{ $post->user->name }}</p>
                                    </div>
                                    <div class="create d-flex align-items-center">
                                        <i class='bx bx-time-five'></i>
                                        <p class="ms-1"> {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                                        </p>
                                    </div>
                                </div>
                                <h5 class="card-title mt-3">{{ $post->title }}</h5>
                                <a href="{{ route('artikel-detail', $post->slug) }}" class=" d-inline-block mt-3">Lihat
                                    selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
