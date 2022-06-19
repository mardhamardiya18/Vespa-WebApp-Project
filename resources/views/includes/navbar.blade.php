<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}">
            <img src="/images/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSideBar"
            aria-controls="offcanvasWithBothOptions">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-none d-lg-block" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="company" href="#">PT PIAGGIO INDONESIA</a>
            </div>
        </div>
    </div>
</nav>

{{-- Nav Menu Desktop --}}
<div class="container menu mt-4 sticky-top d-none d-lg-block bg-light shadow-sm">
    <div class="row align-items-center">
        <div class="col-2 text-end d-none d-lg-block">
            <i class='bx bxs-grid-alt bx-md toggle-sidebar' type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasMenu" aria-controls="offcanvasWithBothOptions"></i>
        </div>
        <div class="col-10 text-center">
            <div class="menu-wrapper">
                <a class="menu-link {{ request()->is('/') ? 'active' : '' }}"
                    href="{{ route('homepage') }}">Home</a>
                <a class="menu-link {{ request()->is('profile') ? 'active' : '' }}"
                    href="{{ route('profile') }}">Profile</a>
                <a class="menu-link" href="#">Visi dan Misi</a>
                <a class="menu-link" href="#">Produk Kami</a>
                <a class="menu-link" href="#">Kontak</a>
                <a class="menu-link" href="#">About Us</a>
            </div>
        </div>
    </div>
</div>

{{-- Nav Menu Mobile --}}
<div class="container sticky-top mt-3 menu-mobile">
    <a class="btn btn-primary d-block btn-menu d-lg-none" data-bs-toggle="collapse" href="#collapseExample"
        role="button" aria-expanded="false" aria-controls="collapseExample">
        Menu
    </a>
    <div class="collapse mt-3 d-lg-none" id="collapseExample">

        <div class="list-group">
            <a href="{{ route('homepage') }}"
                class="list-group-item list-group-item-action {{ request()->is('/') ? 'active' : '' }}">
                Home
            </a>
            <a href="{{ route('profile') }}"
                class="list-group-item list-group-item-action {{ request()->is('profile') ? 'active' : '' }}">Profile</a>
            <a href="#" class="list-group-item list-group-item-action">Visi dan Misi</a>
            <a href="#" class="list-group-item list-group-item-action">Produk Kami</a>
            <a class="list-group-item list-group-item-action">Kontak</a>
            <a class="list-group-item list-group-item-action">About Us</a>
        </div>
    </div>
</div>


{{-- Sidebar Menu --}}
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasSideBar"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title " id="offcanvasWithBothOptionsLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div class="list-group rounded-0">
            <a href="#" class="list-group-item list-group-item-action active"><i class='bx bx-book'></i>
                Artikel</a>
            <a href="#" class="list-group-item list-group-item-action"><i class='bx bx-calendar-event'></i> Event
                Terdekat</a>
            <a href="#" class="list-group-item list-group-item-action"><i class='bx bx-images'></i> Gallery
                Foto</a>
            <a class="list-group-item list-group-item-action "><i class='bx bx-chat'></i> Klien Kami</a>

        </div>
        <div class="auth mt-3 px-3">
            <a class="text-start w-100" data-bs-toggle="collapse" data-bs-target="#collapseAuth" aria-expanded="false"
                aria-controls="collapseExample">
                <i class='bx bx-log-in'></i> Authentication
            </a>

            <div class="collapse mt-3" id="collapseAuth">
                <a href="#" class="btn btn-success d-block">Sign in</a>
                <a href="#" class="btn btn-outline-success d-block mt-2">Sign up</a>
            </div>
        </div>

    </div>
</div>
