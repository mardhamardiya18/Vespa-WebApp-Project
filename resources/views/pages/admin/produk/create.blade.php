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

                            <h3>*Masukan jenis spesifikasi</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label for="engine">Engine</label>
                                        <input type="text" name="engine" id="engine" class="form-control" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="displacement">Displacement</label>
                                        <input type="text" name="displacement" id="displacement" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="max-power">Max. Power</label>
                                        <input type="text" name="maxPower" id="max-power" class="form-control" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="max-torque">Max. Torque</label>
                                        <input type="text" name="maxTorque" id="max-torque" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="cooling-system">Cooling System</label>
                                        <input type="text" name="coolingSystem" id="cooling-system" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label for="front-tire">Front Tire</label>
                                        <input type="text" name="frontTire" id="front-tire" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="rear-tire">Rear Tire</label>
                                        <input type="text" name="rearTire" id="rear-tire" class="form-control" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="fuel-capacity">Fuel Capacity</label>
                                        <input type="text" name="fuelCapacity" id="fuel-capacity" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="transmission">Transmission</label>
                                        <input type="text" name="transmission" id="transmission" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="break-system">Break System</label>
                                        <input type="text" name="brakeSystem" id="break-system" class="form-control"
                                            required>
                                    </div>
                                </div>
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
