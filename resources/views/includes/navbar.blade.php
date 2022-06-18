<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/images/logo.png" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="company" href="#">VESPA INDONESIA</a>
            </div>
        </div>
    </div>
</nav>

{{-- Nav Menu --}}
<div class="container menu mt-4 sticky-top">
    <div class="row align-items-center">
        <div class="col-2 text-end">
            <i class='bx bxs-grid-alt bx-md toggle-sidebar' type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasSidebar" aria-controls="offcanvasWithBothOptions"></i>
        </div>
        <div class="col-10 text-center">
            <div class="menu-wrapper">
                <a class="menu-link active" href="#">Profile</a>
                <a class="menu-link" href="#">Visi dan Misi</a>
                <a class="menu-link" href="#">Produk Kami</a>
                <a class="menu-link">Kontak</a>
                <a class="menu-link">About Us</a>
            </div>
        </div>
    </div>

</div>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasSidebar"
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
            <a class="text-start w-100" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
                <i class='bx bx-log-in'></i> Authentication
            </a>

            <div class="collapse mt-3" id="collapseExample">
                <a href="#" class="btn btn-success d-block">Sign in</a>
                <a href="#" class="btn btn-outline-success d-block mt-2">Sign up</a>
            </div>
        </div>

    </div>
</div>
