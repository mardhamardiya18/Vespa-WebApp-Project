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
                data-bs-target="#offcanvasSideBar" aria-controls="offcanvasWithBothOptions"></i>
        </div>
        <div class="col-8 text-center">
            <div class="menu-wrapper">
                <a class="menu-link {{ request()->is('home') ? 'active' : '' }}"
                    href="{{ route('homepage') }}">Home</a>
                <a class="menu-link {{ request()->is('home/profile') ? 'active' : '' }}"
                    href="{{ route('profile') }}">Profile</a>
                <a class="menu-link {{ request()->is('home/visi-misi') ? 'active' : '' }}"
                    href="{{ route('visimisi') }}">Visi dan Misi</a>
                <a class="menu-link {{ request()->is('home/product') ? 'active' : '' }}"
                    href="{{ route('product') }}">Produk Kami</a>
                <a class="menu-link {{ request()->is('home/contact') ? 'active' : '' }}"
                    href="{{ route('contact') }}">Kontak</a>
                <a class="menu-link {{ request()->is('home/about') ? 'active' : '' }}"
                    href="{{ route('about') }}">About Us</a>


            </div>
        </div>
        <div class="col-2">
            @auth
                <div class="dropdown">
                    @if (Auth::user()->avatar)
                        <img src="{{ Storage::url(Auth::user()->avatar) }}" width="40"
                            class=" rounded-circle ms-3 dropdown-toggle" alt="" id="dropdownProfile"
                            data-bs-toggle="dropdown" aria-expanded="false">
                    @else
                        <img src="{{ Auth::user()->gravatar() }}" width="40"
                            class=" rounded-circle ms-3 dropdown-toggle" alt="" id="dropdownProfile"
                            data-bs-toggle="dropdown" aria-expanded="false">
                    @endif

                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownProfile">
                        @if (Auth::user()->roles == 'ADMIN')
                            <li><a class="dropdown-item active" href="{{ route('product.index') }}">Go to admin
                                    dashboard</a></li>
                        @endif

                        <li><a class="dropdown-item" href="{{ route('account-setting') }}">Setting akun</a></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item text-sm">Logout</button>
                            </form>

                        </li>
                    </ul>
                </div>
            @endauth
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
                class="list-group-item list-group-item-action {{ request()->is('home') ? 'active' : '' }}">
                Home
            </a>
            <a href="{{ route('profile') }}"
                class="list-group-item list-group-item-action {{ request()->is('home/profile') ? 'active' : '' }}">Profile</a>
            <a href="{{ route('visimisi') }}"
                class="list-group-item list-group-item-action {{ request()->is('home/visi-misi') ? 'active' : '' }}">Visi
                dan Misi</a>
            <a href="{{ route('product') }}"
                class="list-group-item list-group-item-action {{ request()->is('home/product') ? 'active' : '' }}">Produk
                Kami</a>
            <a href="{{ route('contact') }}"
                class="list-group-item list-group-item-action {{ request()->is('home/contact') ? 'active' : '' }}">Kontak</a>
            <a href="{{ route('about') }}"
                class="list-group-item list-group-item-action {{ request()->is('home/about') ? 'active' : '' }}">About
                Us</a>
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
            <a href="{{ route('homepage') }}"
                class="list-group-item list-group-item-action {{ request()->is('home*') ? 'active' : '' }}"><i
                    class='bx bx-book'></i>
                Home</a>
            <a href="{{ route('artikel') }}"
                class="list-group-item list-group-item-action {{ request()->is('artikel*') ? 'active' : '' }}"><i
                    class='bx bx-book'></i>
                Artikel</a>
            <a href="{{ route('event') }}"
                class="list-group-item list-group-item-action {{ request()->is('event') ? 'active' : '' }}"><i
                    class='bx bx-calendar-event'></i> Event
                Perusahaan</a>
            <a href="{{ route('gallery') }}"
                class="list-group-item list-group-item-action {{ request()->is('gallery') ? 'active' : '' }}"><i
                    class='bx bx-images'></i> Gallery
                Foto</a>
            <a href="{{ route('testimoni') }}"
                class="list-group-item list-group-item-action {{ request()->is('testimoni') ? 'active' : '' }}"><i
                    class='bx bx-chat'></i> Klien Kami</a>

        </div>
        <div class="auth mt-3 px-3">
            <a class="text-start w-100" data-bs-toggle="collapse" data-bs-target="#collapseAuth"
                aria-expanded="false" aria-controls="collapseExample">
                <i class='bx bx-log-in'></i> Authentication
            </a>

            <div class="collapse mt-3" id="collapseAuth">
                <a href="{{ route('login') }}" class="btn btn-success d-block">Sign in</a>
                <a href="{{ route('register') }}" class="btn btn-outline-success d-block mt-2">Sign up</a>
            </div>
        </div>

    </div>
</div>
