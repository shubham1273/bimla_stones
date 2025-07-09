<header>
        <nav class="navbar navbar-expand-lg bg-transparent position-relative z-1">
            <div class="container">
                <div
                    class="d-flex px-2 px-12px px-lg-0 gap-2 align-items-center w-100 justify-content-between flex-column flex-lg-row">
                    <div class="d-flex gap-2 align-items-center w-100 justify-content-between">
                        <a class="navbar-brand text-white p-0 m-0" href="home.html">Bimla Stones</a>
                        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon w-100 h-100">
                                <img src="{{ asset('assets/images/toggle.png') }}" alt="menu" class="h-100 w-100 object-fit-cover">
                            </span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end w-100 d-none d-lg-flex"
                            id="navbarText">
                              <ul class="navbar-nav">
                                @include('website_partials.navbar')
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

<div class="offcanvas offcanvas-mobile offcanvas-end d-block d-lg-none" tabindex="-1" id="offcanvasDarkNavbar"
    aria-labelledby="offcanvasDarkNavbarLabel">
    <div class="d-flex justify-content-between align-items-center gap-2 mb-4">
        <a class="navbar-brand text-white p-0 m-0" href="home.html">Bimla Stones</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
            <span class="navbar-toggler-icon w-100 h-100">
                <img src="{{ asset('assets/images/toggle.png') }}" alt="menu" class="h-100 w-100 object-fit-cover">
            </span>
        </button>
    </div>
    <ul class="navbar-nav h-100">
        @include('website_partials.navbar')
    </ul>
</div>