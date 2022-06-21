@extends('layouts.admin')

@section('title')
    Admin - Artikel
@endsection

@section('content')
    <section class="product-admin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h3>Kelola Artikel</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('artikel.create') }}" class="btn btn-danger mb-3">
                                + Tambah Artikel Baru
                            </a>


                            <div class="table-responsive">
                                <table class="table table-hover scrolled w-100" id="crudTable">
                                    <thead>
                                        <td>ID</td>
                                        <td>Photo</td>
                                        <td>Judul</td>
                                        <td>Penulis</td>
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
                    data: 'thumbnail',
                    name: 'thumbnail'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'user.name',
                    name: 'user.name'
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
