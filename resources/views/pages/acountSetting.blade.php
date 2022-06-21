@extends('layouts.app')

@section('title')
    Setting Akun
@endsection

@section('content')
    <section class="visimisi mt-5">
        <div class="container">
            <div class="row title-section text-center">
                <div class="col-12">
                    <h1>Setting Akun</h1>
                </div>
            </div>
            <div class="row row-visi mt-5">
                <form action="{{ route('account-store', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="col-12">
                        <div class=" d-flex">
                            <div class="me-5">
                                <img id="preview-image-photos-upload" src="" width="100" class="rounded-circle"
                                    alt="preview image" style="max-height: 250px;">
                            </div>
                            @if (Auth::user()->avatar)
                                <img src="{{ Storage::url(Auth::user()->avatar) }}" width="100"
                                    class=" rounded-circle" />
                            @else
                                <img src="{{ Auth::user()->gravatar() }}" width="100" class=" rounded-circle"
                                    alt="" />
                            @endif

                        </div>


                        <div class="form-group">
                            <label for="avatar">Ubah Photo</label>
                            <input type="file" name="avatar" id="photos" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}"
                                id="">
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}"
                                id="">
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="address_one">Alamat 1</label>
                            <input type="text" class="form-control" name="address_one"
                                value="{{ Auth::user()->address_one }}" id="">
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="address_two">Alamat 2</label>
                            <input type="text" class="form-control" name="address_two"
                                value="{{ Auth::user()->address_two }}" id="">
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="phone_number">No Telepon</label>
                            <input type="number" class="form-control" name="phone_number"
                                value="{{ Auth::user()->phone_number }}" id="">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success w-100 mt-4">Update Data</button>
                </form>
            </div>
        </div>
    </section>
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
