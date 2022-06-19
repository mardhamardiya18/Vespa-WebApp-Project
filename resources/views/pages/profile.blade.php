@extends('layouts.app')

@section('title')
    Profile Perusahaan
@endsection

@section('content')
    <section class="profile mt-5">
        <div class="container">
            <div class="row title-section text-center">
                <div class="col-12">
                    <h1>Profil Perusahaan PT Piaggio Indonesia</h1>
                </div>
            </div>
            <div class="row row-profile mt-5">
                <div class="col-12 col-md-6">
                    <ul class="p-0">
                        <li><strong>Perusahaan:</strong> PT Piaggio Indonesia</li>
                        <li><strong>Pendiri:</strong> Rinaldo Piaggio</li>
                        <li><strong>Mulai di Indonesia</strong>: 2011</li>
                        <li><strong>Perusahaan Asal:</strong> Italia</li>
                        <li><strong>Alamat:</strong>
                            Jl. Jend. Sudirman Kav. 45 - 46, Karet Semanggi, Setiabudi, RT.3/RW.4, Karet Semanggi,
                            Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12930</li>
                    </ul>
                </div>
            </div>
            <div class="row row-pencapaian mt-5">
                <div class="col-12 mb-4">
                    <h2>Pencapaian Terbaru</h2>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="/images/pencapaian1.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <h5 class="card-title">DEALER MOTOPLEX ICONIC 4 BRANDS PT PIAGGIO INDONESIA KINI HADIR DI DAERAH
                                ISTIMEWA YOGYAKARTA</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="/images/pencapaian2.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <h5 class="card-title">PT PIAGGIO INDONESIA TERUS PERLUAS KEHADIRAN DEALER PREMIUM MOTOPLEX
                                PIAGGIO VESPA DAN KALI INI DI JEMBER, JAWA TIMUR</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="/images/pencapaian3.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <h5 class="card-title">PENINGKATAN LEVEL PREMIUMISASI MOTOPLEX DIMULAI MELALUI PEMBUKAAN DILER
                                BARU MOTOPLEX JAKARTA</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                    <div class="card">
                        <img src="/images/pencapaian4.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <h5 class="card-title">PT PIAGGIO INDONESIA MERAYAKAN HARI JADINYA YANG KE 10 DI INDONESIA</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-bestservices mt-5">
                <div class="col-12 mb-4">
                    <h2>Our Best Services</h2>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <h4 class=" fw-bold">01. TEST DRIVE</h4>
                        <p class="text-start">Kami memberikan pelayanan untuk melakukan test drive pada produk kami, dengan
                            tujuan untuk
                            menciptakan pengalaman nyata bersama kami</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-3 mt-sm-0">
                    <div class="card text-center p-4">
                        <h4 class=" fw-bold">02. MOTOPLEX VESPA</h4>
                        <p class="text-start">Untuk menjamin keamanan dan kenyamanan terbaik dalam berkendara, percayakan
                            selalu perawatan kendaraan Anda hanya di Bengkel Resmi Motoplex Vespa.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                    <div class="card text-center p-4">
                        <h4 class=" fw-bold">03. Dealer</h4>
                        <p class="text-start">Kami sudah hadir di 47 tempat di seluruh Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
