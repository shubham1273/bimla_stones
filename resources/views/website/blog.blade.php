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
  <div class="hero-section pt-60 mt-0">
    <div class="container">
      <div class="px-12px">
        <h3 class="text-white fs-40 fw-bold mb-3">Because the Right Knowledge Builds Better Choices</h3>
        <p class="fs-18 text-gray-600 fw-normal mb-0">In a world full of stone suppliers, what truly sets a partner
          apart is transparency, insight, and guidance. That’s why we’ve created this space. Not just to showcase our
          work, but to empower you with clarity. Whether you're sourcing black granite slabs, planning a kitchen
          countertop, or comparing black granite prices, these resources are designed to help you understand the
          material, process, and potential before you decide./p>
        <div class="pt-80 blogs-page">
          <div class="row row-gap-60px">
            <div class="col-lg-4 col-6 px-2 px-lg-4">
              <div class="bg-black gap-2 gap-sm-3 gap-lg-4 d-flex flex-column blog-card overflow-hidden">
                <div class="blog-img w-100 h-100">
                  <img src="{{ asset('assets/images/blog-bg.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
                </div>
                <div class="blog-details px-2 px-sm-3 px-lg-4 pb-2 pb-sm-3 pb-lg-4">
                  <h2 class="fs-23 text-white fw-bold mb-2 mb-lg-3">Vision</h2>
                  <p class="fs-18 fw-normal text-gray-600 mb-3 mb-sm-4 mb-lg-5">To become the most dependable name in
                    natural stone; not by scale, but by honesty, consistency, and the confidence we bring to every
                    project.</p>
                  <a href="blog-details.html"
                    class="btn btn-black border-0 text-white w-100 fs-16 text-decoration-none">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-6 px-2 px-lg-4">
              <div class="bg-black gap-2 gap-sm-3 gap-lg-4 d-flex flex-column blog-card overflow-hidden">
                <div class="blog-img w-100 h-100">
                  <img src="{{ asset('assets/images/blog-bg.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
                </div>
                <div class="blog-details px-2 px-sm-3 px-lg-4 pb-2 pb-sm-3 pb-lg-4">
                  <h2 class="fs-23 text-white fw-bold mb-2 mb-lg-3">Vision</h2>
                  <p class="fs-18 fw-normal text-gray-600 mb-3 mb-sm-4 mb-lg-5">To become the most dependable name in
                    natural stone; not by scale, but by honesty, consistency, and the confidence we bring to every
                    project.</p>
                  <a href="blog-details.html"
                    class="btn btn-black border-0 text-white w-100 fs-16 text-decoration-none">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-6 px-2 px-lg-4">
              <div class="bg-black gap-2 gap-sm-3 gap-lg-4 d-flex flex-column blog-card overflow-hidden">
                <div class="blog-img w-100 h-100">
                  <img src="{{ asset('assets/images/blog-bg.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
                </div>
                <div class="blog-details px-2 px-sm-3 px-lg-4 pb-2 pb-sm-3 pb-lg-4">
                  <h2 class="fs-23 text-white fw-bold mb-2 mb-lg-3">Vision</h2>
                  <p class="fs-18 fw-normal text-gray-600 mb-3 mb-sm-4 mb-lg-5">To become the most dependable name in
                    natural stone; not by scale, but by honesty, consistency, and the confidence we bring to every
                    project.</p>
                  <a href="blog-details.html"
                    class="btn btn-black border-0 text-white w-100 fs-16 text-decoration-none">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-6 px-2 px-lg-4">
              <div class="bg-black gap-2 gap-sm-3 gap-lg-4 d-flex flex-column blog-card overflow-hidden">
                <div class="blog-img w-100 h-100">
                  <img src="{{ asset('assets/images/blog-bg.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
                </div>
                <div class="blog-details px-2 px-sm-3 px-lg-4 pb-2 pb-sm-3 pb-lg-4">
                  <h2 class="fs-23 text-white fw-bold mb-2 mb-lg-3">Vision</h2>
                  <p class="fs-18 fw-normal text-gray-600 mb-3 mb-sm-4 mb-lg-5">To become the most dependable name in
                    natural stone; not by scale, but by honesty, consistency, and the confidence we bring to every
                    project.</p>
                  <a href="blog-details.html"
                    class="btn btn-black border-0 text-white w-100 fs-16 text-decoration-none">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-6 px-2 px-lg-4">
              <div class="bg-black gap-2 gap-sm-3 gap-lg-4 d-flex flex-column blog-card overflow-hidden">
                <div class="blog-img w-100 h-100">
                  <img src="{{ asset('assets/images/blog-bg.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
                </div>
                <div class="blog-details px-2 px-sm-3 px-lg-4 pb-2 pb-sm-3 pb-lg-4">
                  <h2 class="fs-23 text-white fw-bold mb-2 mb-lg-3">Vision</h2>
                  <p class="fs-18 fw-normal text-gray-600 mb-3 mb-sm-4 mb-lg-5">To become the most dependable name in
                    natural stone; not by scale, but by honesty, consistency, and the confidence we bring to every
                    project.</p>
                  <a href="blog-details.html"
                    class="btn btn-black border-0 text-white w-100 fs-16 text-decoration-none">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-6 px-2 px-lg-4">
              <div class="bg-black gap-2 gap-sm-3 gap-lg-4 d-flex flex-column blog-card overflow-hidden">
                <div class="blog-img w-100 h-100">
                  <img src="{{ asset('assets/images/blog-bg.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
                </div>
                <div class="blog-details px-2 px-sm-3 px-lg-4 pb-2 pb-sm-3 pb-lg-4">
                  <h2 class="fs-23 text-white fw-bold mb-2 mb-lg-3">Vision</h2>
                  <p class="fs-18 fw-normal text-gray-600 mb-3 mb-sm-4 mb-lg-5">To become the most dependable name in
                    natural stone; not by scale, but by honesty, consistency, and the confidence we bring to every
                    project.</p>
                  <a href="blog-details.html"
                    class="btn btn-black border-0 text-white w-100 fs-16 text-decoration-none">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-6 px-2 px-lg-4">
              <div class="bg-black gap-2 gap-sm-3 gap-lg-4 d-flex flex-column blog-card overflow-hidden">
                <div class="blog-img w-100 h-100">
                  <img src="{{ asset('assets/images/blog-bg.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
                </div>
                <div class="blog-details px-2 px-sm-3 px-lg-4 pb-2 pb-sm-3 pb-lg-4">
                  <h2 class="fs-23 text-white fw-bold mb-2 mb-lg-3">Vision</h2>
                  <p class="fs-18 fw-normal text-gray-600 mb-3 mb-sm-4 mb-lg-5">To become the most dependable name in
                    natural stone; not by scale, but by honesty, consistency, and the confidence we bring to every
                    project.</p>
                  <a href="blog-details.html"
                    class="btn btn-black border-0 text-white w-100 fs-16 text-decoration-none">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-6 px-2 px-lg-4">
              <div class="bg-black gap-2 gap-sm-3 gap-lg-4 d-flex flex-column blog-card overflow-hidden">
                <div class="blog-img w-100 h-100">
                  <img src="{{ asset('assets/images/blog-bg.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
                </div>
                <div class="blog-details px-2 px-sm-3 px-lg-4 pb-2 pb-sm-3 pb-lg-4">
                  <h2 class="fs-23 text-white fw-bold mb-2 mb-lg-3">Vision</h2>
                  <p class="fs-18 fw-normal text-gray-600 mb-3 mb-sm-4 mb-lg-5">To become the most dependable name in
                    natural stone; not by scale, but by honesty, consistency, and the confidence we bring to every
                    project.</p>
                  <a href="blog-details.html"
                    class="btn btn-black border-0 text-white w-100 fs-16 text-decoration-none">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-6 px-2 px-lg-4">
              <div class="bg-black gap-2 gap-sm-3 gap-lg-4 d-flex flex-column blog-card overflow-hidden">
                <div class="blog-img w-100 h-100">
                  <img src="{{ asset('assets/images/blog-bg.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
                </div>
                <div class="blog-details px-2 px-sm-3 px-lg-4 pb-2 pb-sm-3 pb-lg-4">
                  <h2 class="fs-23 text-white fw-bold mb-2 mb-lg-3">Vision</h2>
                  <p class="fs-18 fw-normal text-gray-600 mb-3 mb-sm-4 mb-lg-5">To become the most dependable name in
                    natural stone; not by scale, but by honesty, consistency, and the confidence we bring to every
                    project.</p>
                  <a href="blog-details.html"
                    class="btn btn-black border-0 text-white w-100 fs-16 text-decoration-none">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
