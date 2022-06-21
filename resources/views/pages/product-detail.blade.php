@extends('layouts.app')

@section('title')
    Product Detail
@endsection

@section('content')
    <div class="product-detail page-detail">
        <section class="product-gallery" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8" data-aos="zoom-in">
                        <transition name="slide-fade" mode="out-in">
                            <img :src="photos[activePhoto].url" :key="photos[activePhoto].id"
                                class=" w-50 main-image d-block m-auto" alt="" />
                        </transition>
                    </div>
                    <div class="col-lg-2 mt-4 mt-sm-0">
                        <div class="row">
                            <div class="col-3 col-lg-12 mt-3 mt-lg-0" data-aos="zoom-in" data-aos-delay="100"
                                v-for="(photo, index) in photos" :key="photo.id">
                                <a href="#" @click="changeActive(index)" class=" d-inline-block mt-lg-3">
                                    <img :src="photo.url" class="img-fluid thumbnail-image"
                                        :class="{ active: index == activePhoto }" alt="" />
                                </a>
                            </div>
                            <a href="#" class="btn btn-pesan d-inline-block mt-4">Tanya Untuk Produk Ini</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="store-detail mt-5 mt-lg-0">
            <div class="container">
                <div class="row">
                    <h2 class="product-name">{{ $product->name }} - {{ $product->seri }}</h2>
                    <h4 class="product-price">Rp {{ number_format($product->price) }}</h4>
                </div>

                <div class="row mt-5">
                    <div class="col-12">
                        <h3>Spesifikasi</h3>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Engine :</th>
                                    <th scope="col">{{ $product->specification->engine }}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Displacement :</th>
                                    <th scope="col">{{ $product->specification->displacement }}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Max. Power :</th>
                                    <th scope="col">{{ $product->specification->maxPower }}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Max. Torque :</th>
                                    <th scope="col">{{ $product->specification->maxTorque }}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Cooling System :</th>
                                    <th scope="col">{{ $product->specification->coolingSystem }}</th>
                                </tr>

                            </thead>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Front Tire :</th>
                                    <th scope="col">{{ $product->specification->frontTire }}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Rear Tire :</th>
                                    <th scope="col">{{ $product->specification->rearTire }}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Fuel Capacity :</th>
                                    <th scope="col">{{ $product->specification->fuelCapacity }}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Transmission :</th>
                                    <th scope="col">{{ $product->specification->transmission }}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Break System :</th>
                                    <th scope="col">{{ $product->specification->brakeSystem }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('addon-script')
    <script src="/vue/vue.js"></script>
    <script>
        var app = new Vue({
            el: "#gallery",
            mounted() {
                AOS.init();
            },
            data: {
                activePhoto: 0,
                photos: [
                    @foreach ($product->gallery as $gallery)
                        {
                            id: {{ $gallery->id }},
                            url: "{{ Storage::url($gallery->photos) }}",
                        },
                    @endforeach

                ],
            },
            methods: {
                changeActive(id) {
                    this.activePhoto = id;
                },
            },
        });
    </script>
@endpush
