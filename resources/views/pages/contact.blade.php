@extends('layouts.app')

@section('title')
    Contact Us
@endsection

@section('content')
    <section class="contact mt-5">
        <div class="container">
            <div class="row title-section text-center">
                <div class="col-12">
                    <h1>Contact Us Below</h1>
                    <p>Customer Service will support you from Monday to Friday 8.00 AM to 5.00 PM</p>
                </div>
            </div>
            <div class="row row-contact mt-5">
                <div class="col-12">
                    <form action="#">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="phone">No Telepon</label>
                            <input type="text" name="phone" id="phone" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="message">No Telepon</label>
                            <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-contact mt-5 w-100 py-3">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
