@extends('layouts.website')
@section('title', 'Bimla Stones - Products')
@section('content')

    <section class="pt-60 types-offer-section">
        <div class="container">
            <div class="px-12px">
                <div class="mb-60">
                    <h3 class="fs-40 text-white fw-bold mb-3 text-center">Our Product Range</h3>
                    <p class="fs-18 text-gray-600 mb-0 fw-normal text-center">From custom-finished monuments to countertops, every product at Bimla Stone begins with precision and ends in perfection. Our stones aren’t just raw materials, they’re the result of thoughtful sourcing, advanced cutting, and hand-inspected craftsmanship. Whether you’re building bold commercial spaces or refined interiors, we offer tailored solutions in black granite that deliver durability, class, and timeless appeal.</p>
                </div>
                <div class="section-heading w-100 mx-auto">
                    <h3 class="fs-40 fw-bold text-center text-white mb-3">Types of Stones We Offer</h3>
                    <p class="text-start text-sm-center text-gray-600 fw-normal mb-0 fs-18">We primarily work with black
                        granite, including highly sought-after variants like:</p>
                </div>
                <div class="offer-product-slider pt-80">

                    @foreach ($section1 as $item)
                        <div>
                            <div class="offer-card h-100 overflow-hidden bg-black d-flex flex-column">
                                <div class="offer-img h-100 w-100">
                                    <img src="{{ asset('uploads/products/'. $item->media) }}" alt="images"
                                        class="h-100 w-100 object-fit-cover" />
                                </div>
                                <div class="offer-content">
                                    <p class="fs-24 text-white fw-normal mb-0">{{$item->title}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                            <img src="{{ asset('uploads/products/'. $section2[0]->media) }}" alt="image"
                                class="h-100 w-100 object-fit-cover" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3">{{$section2[0]->title}}</h3>
                        <p class="fs-16 fw-normal text-gray-600 mb-0">{!! $section2[0]->description !!}</p>
                    </div>
                </div>
                <div class="row row-gap-3 mb-40 flex-column-reverse flex-md-row">
                    <div class="col-md-6">
                        <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3 text-end">{{$section2[1]->title}}</h3>
                        <p class="fs-16 fw-normal text-gray-600 mb-0 text-end">{!! $section2[1]->description !!}</p>
                    </div>
                    <div class="col-md-6">
                        <div class="categorie-img ms-auto">
                            <img src="{{ asset('uploads/products/'. $section2[1]->media) }}" alt="image"
                                class="h-100 w-100 object-fit-cover" />
                        </div>
                    </div>
                </div>
                <div class="categories-slider-section mb-40">
                    <div class="categories-slider">
                        @foreach ($section3 as $item)
                            <div>
                                <div class="categories-card d-flex gap-2 gap-lg-3">
                                    <div class="categories-count">
                                        <img src="{{ asset('assets/images/count-' . ($loop->iteration <= 6 ? $loop->iteration : 6) . '.svg') }}" alt="count" />
                                    </div>
                                    <div class="categories-content">
                                        <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3">{{$item->title}}</h3>
                                        <p class="fs-16 fw-normal text-gray-600 mb-0">{{$item->description}}</p>
                                    </div>
                                    <div class="categories-slider-img h-100 w-100">
                                        <img src="{{ asset('uploads/products/'. $item->media) }}" alt="images"
                                            class="h-100 w-100 object-fit-cover" />
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                        <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3 text-end">{{$section4[0]->title}}</h3>
                        <p class="fs-16 fw-normal text-gray-600 mb-0 text-end">{!! $section4[0]->description !!}</p>
                    </div>
                    <div class="col-md-6">
                        <div class="categorie-img ms-auto">
                            <img src="{{ asset('uploads/products/'. $section4[0]->media) }}" alt="image"
                                class="h-100 w-100 object-fit-cover" />
                        </div>
                    </div>
                </div>
                <div class="row row-gap-3">
                    <div class="col-md-6">
                        <div class="categorie-img">
                            <img src="{{ asset('uploads/products/'. $section4[1]->media) }}" alt="image"
                                class="h-100 w-100 object-fit-cover" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3">{{$section4[1]->title}}</h3>
                        <p class="fs-16 fw-normal text-gray-600 mb-0">{!! $section4[1]->description !!}</p>
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
                        @foreach ($section5 as $item)
                            <div class="col-lg-4 col-6 px-1 px-sm-2 px-lg-3">
                                <div class="vision-card bg-black h-100 d-flex flex-column overflow-hidden">
                                    <div class="vision-img w-100 h-100">
                                        <img src="{{ asset('uploads/products/'. $item->media) }}" alt="images"
                                            class="w-100 h-100 object-fit-cover" />
                                    </div>
                                    <div class="vision-content">
                                        <p class="fs-23 fw-bold text-white mb-1 mb-sm-2 mb-lg-3">{{$item->title}}</p>
                                        <p class="fs-18 text-gray-600 fw-normal mb-0">{{$item->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                    <h3 class="fs-40 fw-bold text-center text-white mb-0">{{$section6->title}}</h3>
                </div>
                <div class="row stands-row overflow-hidden mx-0">
                    <div class="col-lg-5 bg-black ps-0 pe-0 pe-lg-4">
                        <div class="choose-img w-100 h-100">
                            <img src="{{ asset('uploads/products/' . $section6->media) }}" alt="images"
                                class="w-100 h-100 object-fit-cover" />
                        </div>
                    </div>
                    <div class="col-lg-7 bg-black">
                        <div class="d-flex justify-content-center align-items-center h-100 text-white">
                            {!! $section6->description !!}
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
