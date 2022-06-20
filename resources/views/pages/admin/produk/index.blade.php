@extends('layouts.admin')

@section('title')
    Admin - Produk
@endsection

@section('content')
    <section class="product-admin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h3>Kelola Produk</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('product.create') }}" class="btn btn-danger mb-3">
                                + Tambah Product Baru
                            </a>


                            <div class="table-responsive">
                                <table class="table table-hover scrolled w-100" id="crudTable">
                                    <thead>
                                        <td>ID</td>
                                        <td>Nama Produk</td>
                                        <td>Harga</td>
                                        <td>Seri</td>
                                        <td>Tahun</td>
                                        <td>Warna</td>
                                        <td>Aksi</td>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: "{!! url()->current() !!}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'seri',
                    name: 'seri'
                },
                {
                    data: 'launch',
                    name: 'launch'
                },
                {
                    data: 'color',
                    name: 'color'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'

                }
            ]
        })
    </script>
@endpush
