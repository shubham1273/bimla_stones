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
    <section class="pt-60 types-offer-section">
        <div class="container">
            <div class="px-12px">
                <div class="section-heading w-100 mx-auto">
                    <h3 class="fs-40 fw-bold text-center text-white mb-3">Types of Stones We Offer</h3>
                    <p class="text-start text-sm-center text-gray-600 fw-normal mb-0 fs-18">We primarily work with black
                        granite, including highly sought-after variants like:</p>
                </div>
                <div class="offer-product-slider pt-80">
                    <div>
                        <div class="offer-card h-100 overflow-hidden bg-black d-flex flex-column">
                            <div class="offer-img h-100 w-100">
                                <img src="{{ asset('assets/images/offer-1.png') }}" alt="images"
                                    class="h-100 w-100 object-fit-cover" />
                            </div>
                            <div class="offer-content">
                                <p class="fs-24 text-white fw-normal mb-0">Ultimate
                                    Black Granite</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="offer-card h-100 overflow-hidden bg-black d-flex flex-column">
                            <div class="offer-img h-100 w-100">
                                <img src="{{ asset('assets/images/offer-2.png') }}" alt="images"
                                    class="h-100 w-100 object-fit-cover" />
                            </div>
                            <div class="offer-content">
                                <p class="fs-24 text-white fw-normal mb-0">Premium
                                    Black Granite</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="offer-card h-100 overflow-hidden bg-black d-flex flex-column">
                            <div class="offer-img h-100 w-100">
                                <img src="{{ asset('assets/images/offer-3.png') }}" alt="images"
                                    class="h-100 w-100 object-fit-cover" />
                            </div>
                            <div class="offer-content">
                                <p class="fs-24 text-white fw-normal mb-0">Absolute
                                    Black Granite</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="offer-card h-100 overflow-hidden bg-black d-flex flex-column">
                            <div class="offer-img h-100 w-100">
                                <img src="{{ asset('assets/images/offer-4.png') }}" alt="images"
                                    class="h-100 w-100 object-fit-cover" />
                            </div>
                            <div class="offer-content">
                                <p class="fs-24 text-white fw-normal mb-0">Nova
                                    Black Granite</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="offer-card h-100 overflow-hidden bg-black d-flex flex-column">
                            <div class="offer-img h-100 w-100">
                                <img src="{{ asset('assets/images/offer-1.png') }}" alt="images"
                                    class="h-100 w-100 object-fit-cover" />
                            </div>
                            <div class="offer-content">
                                <p class="fs-24 text-white fw-normal mb-0">Ultimate
                                    Black Granite</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-80 categories-section">
        <div class="container">
            <div class="px-12px">
                <div class="section-heading w-100 mx-auto mb-60">
                    <h3 class="fs-40 fw-bold text-center text-white mb-3">Product Categories</h3>
                    <p class="text-start text-sm-center text-gray-600 fw-normal mb-0 fs-18">We provide a wide variety of
                        granite formats to suit both residential and commercial projects</p>
                </div>
                <div class="row row-gap-3 mb-40">
                    <div class="col-md-6">
                        <div class="categorie-img">
                            <img src="{{ asset('assets/images/categories-img-1.png') }}" alt="image"
                                class="h-100 w-100 object-fit-cover" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3"> Blocks</h3>
                        <p class="fs-16 fw-normal text-gray-600 mb-0">Our black granite blocks are sourced from
                            certified quarries and dressed for optimal shape and finish. Ideal for monuments, grave
                            markers, and custom carving projects.</p>
                    </div>
                </div>
                <div class="row row-gap-3 mb-40 flex-column-reverse flex-md-row">
                    <div class="col-md-6">
                        <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3 text-end"> Granite Slabs</h3>
                        <p class="fs-16 fw-normal text-gray-600 mb-0 text-end">Available in standard and custom
                            thicknesses (2 cm- 30 cm), our slabs are cut with multi-wire saw machines for precise finish
                            and uniformity. Perfect for black granite kitchen platforms, flooring, bathroom counters,
                            and dining tables.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="categorie-img ms-auto">
                            <img src="{{ asset('assets/images/categories-img-2.png') }}" alt="image"
                                class="h-100 w-100 object-fit-cover" />
                        </div>
                    </div>
                </div>
                <div class="categories-slider-section mb-40">
                    <div class="categories-slider">
                        <div>
                            <div class="categories-card d-flex gap-2 gap-lg-3">
                                <div class="categories-count">
                                    <img src="{{ asset('assets/images/count-1.svg') }}" alt="images" />
                                </div>
                                <div class="categories-content">
                                    <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3"> Cut-to-Size Projects</h3>
                                    <p class="fs-16 fw-normal text-gray-600 mb-0">Tailored solutions for architects and
                                        contractors. Ideal for window sills, fireplace surrounds, cabinet tops, and
                                        staircase designs. We specialize in black granite steps and black granite stairs
                                        design projects.
                                    </p>
                                </div>
                                <div class="categories-slider-img h-100 w-100">
                                    <img src="{{ asset('assets/images/categories-slider-img-1.jpg') }}" alt="images"
                                        class="h-100 w-100 object-fit-cover" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="categories-card d-flex gap-2 gap-lg-3">
                                <div class="categories-count">
                                    <img src="{{ asset('assets/images/count-2.svg') }}" alt="images" />
                                </div>
                                <div class="categories-content">
                                    <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3"> Cut-to-Size Projects</h3>
                                    <p class="fs-16 fw-normal text-gray-600 mb-0">Tailored solutions for architects and
                                        contractors. Ideal for window sills, fireplace surrounds, cabinet tops, and
                                        staircase designs. We specialize in black granite steps and black granite stairs
                                        design projects.
                                    </p>
                                </div>
                                <div class="categories-slider-img h-100 w-100">
                                    <img src="{{ asset('assets/images/categories-slider-img-2.jpg') }}" alt="images"
                                        class="h-100 w-100 object-fit-cover" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="categories-card d-flex gap-2 gap-lg-3">
                                <div class="categories-count">
                                    <img src="{{ asset('assets/images/count-3.svg') }}" alt="images" />
                                </div>
                                <div class="categories-content">
                                    <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3"> Cut-to-Size Projects</h3>
                                    <p class="fs-16 fw-normal text-gray-600 mb-0">Tailored solutions for architects and
                                        contractors. Ideal for window sills, fireplace surrounds, cabinet tops, and
                                        staircase designs. We specialize in black granite steps and black granite stairs
                                        design projects.
                                    </p>
                                </div>
                                <div class="categories-slider-img h-100 w-100">
                                    <img src="{{ asset('assets/images/categories-slider-img-1.jpg') }}" alt="images"
                                        class="h-100 w-100 object-fit-cover" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="categories-card d-flex gap-2 gap-lg-3">
                                <div class="categories-count">
                                    <img src="{{ asset('assets/images/count-4.svg') }}" alt="images" />
                                </div>
                                <div class="categories-content">
                                    <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3"> Cut-to-Size Projects</h3>
                                    <p class="fs-16 fw-normal text-gray-600 mb-0">Tailored solutions for architects and
                                        contractors. Ideal for window sills, fireplace surrounds, cabinet tops, and
                                        staircase designs. We specialize in black granite steps and black granite stairs
                                        design projects.
                                    </p>
                                </div>
                                <div class="categories-slider-img h-100 w-100">
                                    <img src="{{ asset('assets/images/categories-slider-img-2.jpg') }}" alt="images"
                                        class="h-100 w-100 object-fit-cover" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="prev arrow-box d-flex justify-content-center align-items-center rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20"
                                fill="none">
                                <path
                                    d="M11.5872 3.01593L4.60303 10.0001L11.5872 16.9842L10.1903 19.7778L0.412557 10.0001L10.1903 0.222277L11.5872 3.01593Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="next arrow-box d-flex justify-content-center align-items-center rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20"
                                fill="none">
                                <path
                                    d="M0.412842 16.9841L7.39697 9.99995L0.412842 3.01582L1.80967 0.222168L11.5874 9.99995L1.80967 19.7777L0.412842 16.9841Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="row row-gap-3 mb-40 flex-column-reverse flex-md-row align-items-center">
                    <div class="col-md-6">
                        <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3 text-end"> Cobblestones</h3>
                        <p class="fs-16 fw-normal text-gray-600 mb-0 text-end">Durable and versatile, our black granite
                            cobblestones are great for exterior walkways, garden paths, and timeless landscaping
                            elements.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="categorie-img ms-auto">
                            <img src="{{ asset('assets/images/categories-img-3.png') }}" alt="image"
                                class="h-100 w-100 object-fit-cover" />
                        </div>
                    </div>
                </div>
                <div class="row row-gap-3">
                    <div class="col-md-6">
                        <div class="categorie-img">
                            <img src="{{ asset('assets/images/categories-img-4.png') }}" alt="image"
                                class="h-100 w-100 object-fit-cover" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3"> Monuments & Headstones</h3>
                        <p class="fs-16 fw-normal text-gray-600 mb-0">We manufacture black granite headstones, grave
                            markers, and memorial units with precise edge-finishing and a choice of polished or
                            leathered textures. You can request black granite headstone designs suited to personal or
                            cultural preferences.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-80 vision-section">
        <div class="container">
            <div class="px-12px">
                <div class="section-heading w-100 mx-auto mb-60">
                    <h3 class="fs-40 fw-bold text-center text-white mb-3">Finishes to Match Every Vision</h3>
                    <p class="text-center text-gray-600 fw-normal mb-0 fs-18">Each granite product can be finished as
                        per project requirements. We offer:</p>
                </div>
                <div class="mb-60">
                    <div class="row row-gap-60px mb-60">
                        <div class="col-lg-4 col-6 px-1 px-sm-2 px-lg-3">
                            <div class="vision-card bg-black h-100 d-flex flex-column overflow-hidden">
                                <div class="vision-img w-100 h-100">
                                    <img src="{{ asset('assets/images/vision-1.png') }}" alt="images"
                                        class="w-100 h-100 object-fit-cover" />
                                </div>
                                <div class="vision-content">
                                    <p class="fs-23 fw-bold text-white mb-1 mb-sm-2 mb-lg-3">Polish</p>
                                    <p class="fs-18 text-gray-600 fw-normal mb-0">High-gloss, elegan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 px-1 px-sm-2 px-lg-3">
                            <div class="vision-card bg-black h-100 d-flex flex-column overflow-hidden">
                                <div class="vision-img w-100 h-100">
                                    <img src="{{ asset('assets/images/vision-2.png') }}" alt="images"
                                        class="w-100 h-100 object-fit-cover" />
                                </div>
                                <div class="vision-content">
                                    <p class="fs-23 fw-bold text-white mb-1 mb-sm-2 mb-lg-3">Leather</p>
                                    <p class="fs-18 text-gray-600 fw-normal mb-0">Textured, non-slip</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 px-1 px-sm-2 px-lg-3">
                            <div class="vision-card bg-black h-100 d-flex flex-column overflow-hidden">
                                <div class="vision-img w-100 h-100">
                                    <img src="{{ asset('assets/images/vision-3.png') }}" alt="images"
                                        class="w-100 h-100 object-fit-cover" />
                                </div>
                                <div class="vision-content">
                                    <p class="fs-23 fw-bold text-white mb-1 mb-sm-2 mb-lg-3">Honed</p>
                                    <p class="fs-18 text-gray-600 fw-normal mb-0">Smooth and matte</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 px-1 px-sm-2 px-lg-3">
                            <div class="vision-card bg-black h-100 d-flex flex-column overflow-hidden">
                                <div class="vision-img w-100 h-100">
                                    <img src="{{ asset('assets/images/vision-4.png') }}" alt="images"
                                        class="w-100 h-100 object-fit-cover" />
                                </div>
                                <div class="vision-content">
                                    <p class="fs-23 fw-bold text-white mb-1 mb-sm-2 mb-lg-3">Flamed</p>
                                    <p class="fs-18 text-gray-600 fw-normal mb-0">Rough surface for exterior use</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 px-1 px-sm-2 px-lg-3">
                            <div class="vision-card bg-black h-100 d-flex flex-column overflow-hidden">
                                <div class="vision-img w-100 h-100">
                                    <img src="{{ asset('assets/images/vision-5.png') }}" alt="images"
                                        class="w-100 h-100 object-fit-cover" />
                                </div>
                                <div class="vision-content">
                                    <p class="fs-23 fw-bold text-white mb-1 mb-sm-2 mb-lg-3">Flamed & Brushed</p>
                                    <p class="fs-18 text-gray-600 fw-normal mb-0">Subtle texture with grip</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 px-1 px-sm-2 px-lg-3">
                            <div class="vision-card bg-black h-100 d-flex flex-column overflow-hidden">
                                <div class="vision-img w-100 h-100">
                                    <img src="{{ asset('assets/images/vision-6.png') }}" alt="images"
                                        class="w-100 h-100 object-fit-cover" />
                                </div>
                                <div class="vision-content">
                                    <p class="fs-23 fw-bold text-white mb-1 mb-sm-2 mb-lg-3">Dual Finish</p>
                                    <p class="fs-18 text-gray-600 fw-normal mb-0"> Custom finish on either side of the
                                        slab</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="fs-18 text-gray-600 font-normal mb-0 vision-text w-100 mx-auto text-center">Whether you’re
                    after a black granite floor design or a standout black granite kitchen sink surround, our surface
                    finishes are crafted for both beauty and performance.</p>
            </div>
        </div>
    </section>
    <section class="stands-section pt-80">
        <div class="px-12px">
            <div class="container">
                <div class="w-100 mx-auto mb-60">
                    <h3 class="fs-40 fw-bold text-center text-white mb-0">Why Our Granite Stands Out</h3>
                </div>
                <div class="row stands-row overflow-hidden mx-0">
                    <div class="col-lg-5 bg-black ps-0 pe-0 pe-lg-4">
                        <div class="choose-img w-100 h-100">
                            <img src="{{ asset('assets/images/stands-img.png') }}" alt="images"
                                class="w-100 h-100 object-fit-cover" />
                        </div>
                    </div>
                    <div class="col-lg-7 bg-black">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="py-4 pe-3">
                                <ul class="mb-40">
                                    <li class="fs-18 text-gray-600 fw-normal fs-18 mb-2"><span
                                            class="text-white fs-24">Consistent Thickness & Gloss: </span> Every 5th
                                        slab is checked mid-process for quality</li>
                                    <li class="fs-18 text-gray-600 fw-normal fs-18 mb-2"><span
                                            class="text-white fs-24">Massive Capacity: </span> 2.5 lakh+  sq. ft.
                                        processed monthly</li>
                                    <li class="fs-18 text-gray-600 fw-normal fs-18 mb-2"><span
                                            class="text-white fs-24">International Standards: </span>2.5 lakh+  sq. ft.
                                        processed monthly</li>
                                    <li class="fs-18 text-gray-600 fw-normal fs-18 mb-2"><span
                                            class="text-white fs-24">Custom-Friendly: </span>From sample to full
                                        container, we adapt to your project</li>
                                    <li class="fs-18 text-gray-600 fw-normal fs-18 mb-2"><span
                                            class="text-white fs-24">Eco-Responsible: </span>100% solar-powered plant &
                                        water recycling system</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pt-80">
        <section class="ready-section w-100 mx-auto">
            <div class="container">
                <div class="section-heading w-100 mx-auto">
                    <h3 class="fs-40 fw-bold text-center text-white mb-4">Ready to Source the Best Black Granite?</h3>
                    <p class="text-start text-lg-center text-gray-600 fw-normal mb-4 fs-18">Whether you’re working on a
                        home renovation or a global-scale commercial order, our black granite price list and quality
                        will impress. Ask for a sample. Explore how it feels. And then, if it suits your need—partner
                        with us.</p>
                    <div class="d-flex justify-content-center">
                        <a href="contact-us.html" class="btn btn-primary-bg border-0 text-white w-100 fs-16">Talk to an Expert</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection