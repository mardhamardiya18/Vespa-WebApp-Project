@extends('layouts.admin')

@section('title')
    Admin Dashboard - Create Product Gallery
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Admin Dashboard - Create Product Gallery</h2>
                <p class="dashboard-subtitle">Look what you have made today!</p>
            </div>

            <div class="dashboard-content mt-4 mt-ld-5">
                <div class="row">
                    <div class="col-lg-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('product-galleries.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="products_id">Pilih Produk</label>
                                            <select name="products_id" class="form-control" id="">
                                                @foreach ($products as $product)
                                                    <option value="{{ $product->id }}">{{ $product->seri }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="photos">Upload Photo</label>
                                            <input type="file" name="photos" id="photos" required
                                                class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <img id="preview-image-photos-upload" src="" alt="preview image"
                                                style="max-height: 250px;">
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col text-right">
                                            <a href="{{ route('product-galleries.index') }}"
                                                class="btn btn-danger">Kembali</a>
                                            <button type="submit" class="btn btn-success">Save Gallery</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script type="text/javascript">
        $(document).ready(function(e) {


            $('#photos').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-photos-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
@endpush
