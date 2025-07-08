@extends('layouts.website')
@section('title', 'Bimla Stones - Products')
@section('content')
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
      <li class="nav-item">
        <a class="nav-link px-0 fw-normal" aria-current="page" href="home.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-0 fw-normal" href="product.html">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-0 fw-normal" href="process.html">MAnufacture process</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-0 fw-normal" href="about-us.html">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-0 fw-normal" href="blogs.html">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-0 fw-normal" href="gallery.html">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-0 fw-normal" href="contact-us.html">Contact us</a>
      </li>
    </ul>
  </div>
  <div class="hero-section pt-60">
    <div class="container">
      <div class="px-12px">
        <div class="mb-60">
          <h3 class="fs-40 text-white fw-bold mb-3">Crafted by Nature, Perfected by Us</h3>
          <p class="fs-18 text-gray-600 mb-0 fw-normal">Welcome to our gallery: a visual journey through the heart of
            our craftsmanship. From the first cut of raw <span class="fw-bold text-white">black granite blocks</span> to
            the final finish of <span class="text-white fw-bold">polished slabs</span>, each image here reflects the
            precision, power, and passion behind our process.</p>
        </div>
        <div class="row row-gap-3">
          <div class="col-lg-6">
            <div class="gallery-1 h-100 w-100">
              <img src="{{ asset('assets/images/gallery-1.png') }}" alt="images" class="h-100 w-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="d-flex flex-row flex-lg-column h-100 gap-3">
              <div class="gallery-2 h-100 w-100">
                <img src="{{ asset('assets/images/gallery-2.png') }}" alt="images" class="h-100 w-100 object-fit-cover" />
              </div>
              <div class="gallery-2 h-100 w-100">
                <img src="{{ asset('assets/images/gallery-3.png') }}" alt="images" class="h-100 w-100 object-fit-cover" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- story-hero-section -->
  <section class="story-hero-section-main px-12px">
    <div class="container">
      <div class="story-hero-section">
        <div class="row row-gap-3">
          <div class="col-lg-6 mt-0 mt-lg-4">
            <h2 class="fs-40 fw-bold text-white mb-2 mb-lg-3  text-start">Every Stone Tells a Story</h2>
            <p class="fs-18 text-gray-600 mb-3 mb-lg-4 fw-normal">Explore our curated selection of photographs and
              videos featuring our factory in motion, advanced machinery, custom-cut projects, packaging and loading,
              and the timeless beauty of <span class="text-white fw-bold">black granite</span> in real spaces, kitchens,
              countertops, monuments, and more.
            </p>
            <p class="fs-18 text-gray-600 mb-0 fw-normal">This is where <span class="text-white fw-bold">quality meets
                clarity</span>, and where you can see why businesses around the world choose us to bring their vision to
              life.</p>
          </div>
          <div class="col-lg-6">
            <div class="story-hero-img h-100 w-100">
              <img src="{{ asset('assets/images/story-img.png') }}" alt="images" class="h-100 w-100 object-fit-cover" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- polishing-section -->
  <section class="polishing-section pt-80">
    <div class="px-12px">
      <div class="container">
        <h3 class="text-center fs-40 text-white fw-bold mb-60">Polishing</h3>
        <div class="row row-gap-3">
          <div class="col-lg-4 col-6">
            <div class="Polishing-img">
              <img src="{{ asset('assets/images/polishing-1.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="Polishing-img">
              <img src="{{ asset('assets/images/polishing-2.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="Polishing-img">
              <img src="{{ asset('assets/images/polishing-1.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- polishing-section -->
  <section class="polishing-section pt-80">
    <div class="px-12px">
      <div class="container">
        <h3 class="text-center fs-40 text-white fw-bold mb-60">Stones</h3>
        <div class="row row-gap-3">
          <div class="col-lg-4 col-6">
            <div class="Polishing-img">
              <img src="{{ asset('assets/images/stones-1.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="Polishing-img">
              <img src="{{ asset('assets/images/stones-2.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="Polishing-img">
              <img src="{{ asset('assets/images/stones-2.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection