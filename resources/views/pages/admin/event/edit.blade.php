@extends('layouts.admin')

@section('title')
    Admin | Edit EVent
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-12">
                <h5>Edit Event</h5>
            </div>
        </div>
        <div class="row mt-4">
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
                        <form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row">
                                <div class="col-md-12">



                                    <div class="form-group mt-5">
                                        <label for="photos">Pilih Header Event</label>
                                        <input type="file" name="photos" id="photos" class="form-control">
                                        <small class="text-muted">Recommended 795x460 px</small>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <img id="preview-image-photos-upload" src="" alt="preview image"
                                            style="max-height: 250px;">
                                    </div>

                                    <div class="form-group mt-5">
                                        <label for="name">Judul Event</label>
                                        <input type="text" name="name" value="{{ $event->name }}" id="name"
                                            required class="form-control">
                                    </div>

                                    <div class="form-group mt-5">
                                        <label for="place">Tempat Event</label>
                                        <input type="text" name="place" id="place" value="{{ $event->place }}"
                                            required class="form-control">
                                    </div>

                                    <div class="form-group mt-5">
                                        <label for="begin">Waktu Event</label>
                                        <input type="text" name="begin" id="begin" value="{{ $event->begin }}"
                                            required class="form-control">
                                    </div>


                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col text-right">
                                    <a href="{{ route('artikel.index') }}" class="btn btn-danger">Kembali</a>
                                    <button type="submit" class="btn btn-success">Update Artikel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script type="text/javascript">
        $(document).ready(function(e) {


            $('#thumbnail').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-thumbnail-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });

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

    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endpush
