@extends('layouts.admin')

@section('title')
    Admin | Edit Artikel
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-12">
                <h5>Edit Artikel</h5>
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
                        <form action="{{ route('artikel.update', $post->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <input type="hidden" value="{{ Auth::user()->id }}" name="users_id">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="thumbnail">Pilih Kategori</label>
                                        <select name="categories_id" id="" class="form-control">
                                            <option value="{{ $post->categories_id }}" selected disabled>Default -
                                                {{ $post->category->name }}</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="thumbnail">Pilih Thumbnail</label>
                                        <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                                        <small>Kosongkan jika tidak diganti</small>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <img id="preview-image-thumbnail-upload" src="" alt="preview image"
                                            style="max-height: 250px;">
                                    </div>

                                    <div class="form-group mt-5">
                                        <label for="photos">Pilih Header Artikel</label>
                                        <input type="file" name="photos" id="photos" class="form-control">
                                        <small>Kosongkan jika tidak diganti</small>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <img id="preview-image-photos-upload" src="" alt="preview image"
                                            style="max-height: 250px;">
                                    </div>

                                    <div class="form-group mt-5">
                                        <label for="title">Judul Artikel</label>
                                        <input type="text" name="title" value="{{ $post->title }}" id="title"
                                            required class="form-control">
                                    </div>

                                    <div class="form-group mt-4">
                                        <label for="content">Buat Konten Disini</label>
                                        <textarea name="content" id="editor">
                                            {!! $post->content !!}
                                        </textarea>
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
