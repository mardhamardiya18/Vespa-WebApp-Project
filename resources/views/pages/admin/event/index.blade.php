@extends('layouts.admin')

@section('title')
    Admin - Event
@endsection

@section('content')
    <section class="product-admin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h3>Kelola Event</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('event.create') }}" class="btn btn-danger mb-3">
                                + Tambah Event Baru
                            </a>


                            <div class="table-responsive">
                                <table class="table table-hover scrolled w-100" id="crudTable">
                                    <thead>
                                        <td>ID</td>
                                        <td>Photo</td>
                                        <td>Judul</td>
                                        <td>Tempat</td>
                                        <td>Waktu</td>
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
                    data: 'photos',
                    name: 'photos'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'place',
                    name: 'place'
                },
                {
                    data: 'begin',
                    name: 'begin'
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
