<div class="hero-section-home">
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
              <div class="collapse navbar-collapse justify-content-end w-100 d-none d-lg-flex" id="navbarText">
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
    <!-- hero-section-main -->
    <div class="hero-section-main">
      <div class="px-12px">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-lg-6 col-xxl-7 pe-0">
              <div class="hero-content">
                <h1 class="text-white fw-bold hero-text mb-4">{{$section1->title}}</h1>
                <div class="d-flex gap-3 align-items-start justify-content-between home-mobile-hero-section">
                  <div>
                    <p class="text-gray-600 fs-24 fw-normal mb-4 text-uppercase">{{$section1->description}}</p>
                    <button class="btn btn-primary-bg border-0 text-white w-100 fs-16" data-bs-toggle="modal"
                      data-bs-target="#quoteModal">Get a Quote</button>

                    <div class="modal fade quote-modal" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content mx-0 mx-sm-3 mx-lg-0">
                          <div class="d-flex justify-content-between align-items-center gap-3 pb-2 mb-4">
                            <h2 class="fs-24 text-white fw-bold">Get a Quote</h2>
                            <button type="button" class="text-white bg-transparent border-0 p-0" data-bs-dismiss="modal"
                              aria-label="Close">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none">
                                <path
                                  d="M13 1C12.8125 0.81253 12.5582 0.707214 12.293 0.707214C12.0278 0.707214 11.7735 0.81253 11.586 1L7 5.586L2.414 1C2.22647 0.81253 1.97217 0.707214 1.707 0.707214C1.44184 0.707214 1.18753 0.81253 1 1C0.81253 1.18753 0.707214 1.44184 0.707214 1.707C0.707214 1.97217 0.81253 2.22647 1 2.414L5.586 7L1 11.586C0.81253 11.7735 0.707214 12.0278 0.707214 12.293C0.707214 12.5582 0.81253 12.8125 1 13C1.18753 13.1875 1.44184 13.2928 1.707 13.2928C1.97217 13.2928 2.22647 13.1875 2.414 13L7 8.414L11.586 13C11.7735 13.1875 12.0278 13.2928 12.293 13.2928C12.5582 13.2928 12.8125 13.1875 13 13C13.1875 12.8125 13.2928 12.5582 13.2928 12.293C13.2928 12.0278 13.1875 11.7735 13 11.586L8.414 7L13 2.414C13.1875 2.22647 13.2928 1.97217 13.2928 1.707C13.2928 1.44184 13.1875 1.18753 13 1Z"
                                  fill="white" />
                              </svg>
                            </button>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <form>
                                <input type="text" class="form-control mb-3 fs-16" placeholder="Name" required />
                                <input type="text" class="form-control mb-3 fs-16" placeholder="Email" required />
                                <input type="text" class="form-control mb-3 fs-16" placeholder="Number" required />
                                <div class="dropdown mb-3">
                                  <button
                                    class="form-control dropdown-toggle d-flex justify-content-between align-items-center"
                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Product Type
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="getQuote_1" />
                                      <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_1">
                                        Blocks
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="getQuote_2" />
                                      <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_2">
                                        Slabs (2cm–30cm)
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="getQuote_3" />
                                      <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_3">
                                        Cut-to-Size Orders / Project Supply
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="getQuote_4" />
                                      <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_4">
                                        Tiles
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="getQuote_5" />
                                      <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_5">
                                        Cobble Stones
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="getQuote_6" />
                                      <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_6">
                                        Monuments
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="getQuote_7" />
                                      <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_7">
                                        Export Inquiry
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="getQuote_8" />
                                      <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_8">
                                        Other
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-1"
                                  type="submit">Submit</button>
                              </form>
                            </div>
                            <div class="col-sm-6 d-none d-sm-block">
                              <div class="modal-img w-100 h-100">
                                <img src="{{ asset('assets/images/modal-bg.png') }}" alt="images"
                                  class="w-100 h-100 object-fit-cover" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="hero-images position-relative d-block d-md-none ms-auto">
                    <div class="hero-img-1 ms-auto position-relative z-1">
                      <img src="{{ asset('assets/images/hero-1.png') }}" alt="hero-img" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="hero-img-2">
                      <img src="{{ asset('assets/images/hero-2.png') }}" alt="hero-img" class="w-100 h-100 object-fit-cover">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-lg-6 col-xxl-5 ps-0">
              <div class="hero-images position-relative d-none d-md-block">
                <div class="hero-img-1 ms-auto position-relative z-1">
                  <img src="{{ asset('assets/images/hero-1.png') }}" alt="hero-img" class="w-100 h-100 object-fit-cover">
                </div>
                <div class="hero-img-2">
                  <img src="{{ asset('assets/images/hero-2.png') }}" alt="hero-img" class="w-100 h-100 object-fit-cover">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>