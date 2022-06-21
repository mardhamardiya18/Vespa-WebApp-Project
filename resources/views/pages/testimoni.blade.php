@extends('layouts.app')

@section('title')
    Testimonial Customer
@endsection

@section('content')
    <section class="testi mt-5">
        <div class="container">
            <div class="row title-section text-center">
                <div class="col-12">
                    <h1>Testimonial With Customer Success😃</h1>
                </div>
            </div>
            <div class="row row-testi">

                @foreach ($testies as $testi)
                    <div class="col-md-6 mt-5">
                        <div class="card">
                            @if ($testi->user->avatar)
                                <img src="{{ Storage::url($testi->user->avatar) }}" width="70"
                                    class=" rounded-circle ms-3 dropdown-toggle" alt="" id="dropdownProfile"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                            @else
                                <img src="{{ App\Models\User::gravatar() }}" width="70"
                                    class=" rounded-circle ms-3 dropdown-toggle" alt="" id="dropdownProfile"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                            @endif
                            <i class='bx bxs-quote-right quote'></i>
                            <div class="card-body p-5 text-center mt-3">
                                <h5 class="card-title">{{ $testi->user->name }}</h5>
                                <p class="m-0">Pembeli <a href="#"
                                        class="badge text-bg-warning">{{ $testi->product->name }} -
                                        {{ $testi->product->seri }}</a>
                                </p>
                                <div class="rate mt-4">
                                    @if ($testi->rate == 'tidak puas')
                                        <i class="bx bxs-star bx-sm"></i>
                                        <i class="bx bx-star bx-sm"></i>
                                        <i class="bx bx-star bx-sm"></i>
                                        <i class="bx bx-star bx-sm"></i>
                                        <i class="bx bx-star bx-sm"></i>
                                    @elseif ($testi->rate == 'kurang puas')
                                        <i class="bx bxs-star bx-sm"></i>
                                        <i class="bx bxs-star bx-sm"></i>
                                        <i class="bx bx-star bx-sm"></i>
                                        <i class="bx bx-star bx-sm"></i>
                                        <i class="bx bx-star bx-sm"></i>
                                    @elseif ($testi->rate == 'puas')
                                        <i class="bx bxs-star bx-sm"></i>
                                        <i class="bx bxs-star bx-sm"></i>
                                        <i class="bx bxs-star bx-sm"></i>
                                        <i class="bx bx-star bx-sm"></i>
                                        <i class="bx bx-star bx-sm"></i>
                                    @elseif ($testi->rate == 'puas banget')
                                        <i class="bx bxs-star bx-sm"></i>
                                        <i class="bx bxs-star bx-sm"></i>
                                        <i class="bx bxs-star bx-sm"></i>
                                        <i class="bx bxs-star bx-sm"></i>
                                        <i class="bx bx-star bx-sm"></i>
                                    @elseif ($testi->rate == 'sangat puas banget')
                                        <i class="bx bxs-star bx-sm"></i>
                                        <i class="bx bxs-star bx-sm"></i>
                                        <i class="bx bxs-star bx-sm"></i>
                                        <i class="bx bxs-star bx-sm"></i>
                                        <i class="bx bxs-star bx-sm"></i>
                                    @endif

                                </div>
                                <p class="content mt-3">{{ $testi->content }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
