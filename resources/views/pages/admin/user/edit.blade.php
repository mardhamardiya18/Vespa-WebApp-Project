@extends('layouts.admin')

@section('title')
    Admin | Edit User
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-12">
                <h5>Edit User {{ $user->name }}</h5>
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
                        <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">


                                    <div class="form-group mt-5">
                                        <label for="name">Nama</label>
                                        <input type="text" name="name" id="name" value="{{ $user->name }}"
                                            class="form-control">

                                    </div>


                                    <div class="form-group mt-5">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" value="{{ $user->email }}"
                                            required class="form-control">
                                    </div>

                                    <div class="form-group mt-5">
                                        <label for="phone_number">Nomor Telepom</label>
                                        <input type="number" name="phone_number" value="{{ $user->phone_number }}"
                                            id="phone_number" required class="form-control">
                                    </div>

                                    <div class="form-group mt-5">
                                        <label for="roles">Role</label>
                                        <select name="roles" id="roles" class="form-control">
                                            <option value="{{ $user->roles }}">Default - {{ $user->roles }}</option>
                                            <option value="USER">USER</option>
                                            <option value="ADMIN">ADMIN</option>
                                        </select>
                                    </div>



                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col text-right">
                                    <a href="{{ route('user.index') }}" class="btn btn-danger">Kembali</a>
                                    <button type="submit" class="btn btn-success">Ubah User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
