@extends('layouts.admin')

@section('title')
    Admin - Buat Produk
@endsection

@section('content')
    <section class="product-admin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h3>Buat Produk</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-4">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Produk</label>
                                <input type="text" name="name" id="name" class="form-control" autofocus required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="seri">Tipe Produk</label>
                                <input type="text" name="seri" id="seri" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="color">Warna Produk</label>
                                <input type="text" name="color" id="color" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="launch">Tahun Keluaran</label>
                                <input type="number" name="launch" id="launch" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="price">Harga</label>
                                <input type="number" name="price" id="price" class="form-control" required>
                                <small class="text-muted">*Jangan ada koma</small>
                            </div>

                            <button type="submit" class="btn btn-success">Simpan Produk</button>
                            <a href="{{ route('product.index') }}" class="btn btn-danger">Kembali</a>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
