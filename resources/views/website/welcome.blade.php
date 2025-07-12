@extends('layouts.website')
@section('title', 'Bimla Stones')
@section('content')
<div class="hero-section-home">
    <!-- hero-section-main -->
    <div class="hero-section-main">
      <div class="px-12px">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-lg-6 col-xxl-7 pe-0">
              <div class="hero-content">
                <h1 class="text-white fw-bold hero-text mb-4">{{ $section1->title }}</h1>
                <div class="d-flex gap-3 align-items-start justify-content-between home-mobile-hero-section">
                  <div>
                    <p class="text-gray-600 fs-24 fw-normal mb-4 text-uppercase hero-text-content"> {{ $section1->description }}</p>
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Trigger Button -->
                    <button class="btn btn-primary-bg border-0 text-white w-100 fs-16" data-bs-toggle="modal" data-bs-target="#quoteModal">Get a Quote</button>

                    <!-- Modal -->
                    <div class="modal fade quote-modal" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content mx-0 mx-sm-3 mx-lg-0">
                                <div class="d-flex justify-content-between align-items-center gap-3 pb-2 mb-4">
                                    <h2 class="fs-24 text-white fw-bold">Get a Quote</h2>
                                    <button type="button" class="text-white bg-transparent border-0 p-0" data-bs-dismiss="modal" aria-label="Close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path d="M13 1..." fill="white" />
                                        </svg>
                                    </button>
                                </div>
                                <form action="{{ route('quote.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" name="name" class="form-control mb-3 fs-16" placeholder="Name" value="{{ old('name') }}" required />
                                            <input type="email" name="email" class="form-control mb-3 fs-16" placeholder="Email" value="{{ old('email') }}" required />
                                            <input type="text" name="phone_number" class="form-control mb-3 fs-16" placeholder="Number" value="{{ old('phone_number') }}" required />

                                            <div class="dropdown mb-3">
                                                <button class="form-control dropdown-toggle d-flex justify-content-between align-items-center" type="button" data-bs-toggle="dropdown">
                                                    Product Type
                                                </button>
                                                <div class="dropdown-menu p-2" style="max-height:200px; overflow-y:auto">
                                                    @foreach(['Blocks','Slabs (2cm–30cm)','Cut-to-Size Orders / Project Supply','Tiles','Cobble Stones','Monuments','Export Inquiry','Other'] as $type)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="product_type[]" value="{{ $type }}" id="type_{{ $loop->index }}" {{ is_array(old('product_type')) && in_array($type, old('product_type')) ? 'checked' : '' }}>
                                                        <label class="form-check-label fs-16 fw-normal text-gray-600" for="type_{{ $loop->index }}">{{ $type }}</label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <!-- <h3 class="fs-18 fw-normal text-gray-600 mb-3">Upload a reference image (if any)</h3>
                                            <div class="file-upload-box" onclick="document.getElementById('quoteImage').click();">
                                                <p class="fs-16 text-gray-600 fw-normal mb-0">Upload Image</p>
                                                <input type="file" id="quoteImage" name="reference_image" hidden>
                                            </div> -->

                                            <button class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-1" type="submit">Submit</button>
                                        </div>
                                        <div class="col-sm-6 d-none d-sm-block">
                                            <div class="modal-img w-100 h-100">
                                                <img src="{{ asset('assets/images/modal-bg.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="hero-images position-relative d-block d-md-none ms-auto">
                    <div class="hero-img-1 ms-auto position-relative z-1">
                      <img src="{{ ('assets/images/hero-1.png') }}" alt="hero-img" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="hero-img-2">
                      <img src="{{ ('assets/images/hero-2.jpg') }}" alt="hero-img" class="w-100 h-100 object-fit-cover">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-lg-6 col-xxl-5 ps-0">
              <div class="hero-images position-relative d-none d-md-block">
                <div class="hero-img-1 ms-auto position-relative z-1">
                  <img src="{{ ('assets/images/hero-1.png') }}" alt="hero-img" class="w-100 h-100 object-fit-cover">
                </div>
                <div class="hero-img-2">
                  <img src="{{ ('assets/images/hero-2.jpg') }}" alt="hero-img" class="w-100 h-100 object-fit-cover">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- we are -->
    <section class="we-are-section pt-80">
      <div class="container">
        <div class="section-heading w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-3">{{$section4->title}}</h3>
        </div>
        <div class="we-are-content px-12px text-white">
          {!! $section4->description !!}
        </div>
      </div>
    </section>
    <!-- full-video-container -->
    <div class="full-video-container pt-80">
      <div class="video-container d-flex justify-content-center align-items-center position-relative">
        <button class="play-button position-absolute m-auto top-0 bottom-0 start-0 end-0 border-0 rounded-circle">
          <i class="fa-solid fa-play text-white"></i>
        </button>
        <div class="video-img position-relative">
          <img src="{{ asset('assets/images/video-full-img.png') }}" alt="Video Thumbnail" class="video-thumbnail">
          <video class="my-video">
            <source
              src="{{ asset('uploads/home/' . $section2->media) }}"
              type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
    <!-- get-touch -->
    <section class="get-touch">
      <div class="container">
        <div class="d-flex gap-4 justify-content-between align-items-center get-touch-container overflow-hidden">
          <div class="get-touch-img w-100">
            <img src="{{ ('assets/images/grt-touch.png') }}" alt="get-touch-img" class="w-100 h-100 object-fit-cover">
          </div>
          <div class="get-touch-content">
            <p class="text-white fs-40 fw-normal mb-40 text-uppercase">Blending creativity and functionality in every
              design</p>
            <!-- Trigger Button -->
                <button class="btn btn-black border-0 text-white w-100 fs-16" data-bs-toggle="modal"
                        data-bs-target="#touchModal">Get In Touch</button>

                <!-- Modal -->
                <div class="modal fade touch-modal" id="touchModal" tabindex="-1" aria-labelledby="touchModal" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content mx-0 mx-sm-3 mx-lg-0">
                      <div class="d-flex justify-content-between align-items-center gap-3 pb-2 mb-4 p-3">
                        <h2 class="fs-24 text-white fw-bold">Get In Touch</h2>
                        <button type="button" class="text-white bg-transparent border-0 p-0" data-bs-dismiss="modal" aria-label="Close">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <path d="M13 1C12.81 0.81 12.56 0.71 12.29 0.71..." fill="white" />
                          </svg>
                        </button>
                      </div>

                      <form id="getInTouchForm" enctype="multipart/form-data">
                        @csrf
                        <div class="p-3">
                          <!-- Alert Message -->
                          <div id="getInTouchAlert"></div>

                          <div class="row">
                            <div class="col-lg-6">
                              <input type="text" class="form-control mb-3 fs-16" name="name" placeholder="Full Name *" required />
                            </div>
                            <div class="col-lg-6">
                              <input type="text" class="form-control mb-3 fs-16" name="phone_number" placeholder="Phone Number* (with country code)" required />
                            </div>
                            <div class="col-lg-6">
                              <input type="text" class="form-control mb-3 fs-16" name="company" placeholder="Company Name (Optional)" />
                            </div>
                            <div class="col-lg-6">
                              <input type="email" class="form-control mb-3 fs-16" name="email" placeholder="Email ID *" required />
                            </div>
                            <div class="col-lg-6">
                              <input type="text" class="form-control mb-3 fs-16" name="location" placeholder="Your Location" required />
                            </div>

                            <div class="col-lg-6">
                              <div class="dropdown mb-3">
                                <button class="form-control dropdown-toggle d-flex justify-content-between align-items-center"
                                        type="button" data-bs-toggle="dropdown">
                                  Product Type
                                </button>
                                <div class="dropdown-menu p-2" style="max-height:200px; overflow-y:auto">
                                  @foreach(['Blocks','Slabs (2cm–30cm)','Cut-to-Size Orders / Project Supply','Tiles','Cobble Stones','Monuments','Export Inquiry','Other'] as $type)
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="product_type[]" value="{{ $type }}" id="type_{{ $loop->index }}">
                                    <label class="form-check-label fs-16 fw-normal text-gray-600" for="type_{{ $loop->index }}">{{ $type }}</label>
                                  </div>
                                  @endforeach
                                </div>
                              </div>
                            </div>

                            <div class="col-12">
                              <textarea class="form-control mb-3 fs-16" name="message" placeholder="Any specific details, sizes, or queries?" rows="4"></textarea>
                            </div>

                            <div class="col-12">
                              <h3 class="fs-18 fw-normal text-gray-600 mb-2">Upload a reference image (if any)</h3>
                              <div class="file-upload-box mb-3" onclick="document.getElementById('reference_image').click();">
                                <p class="fs-16 text-gray-600 fw-normal mb-0">Upload Image</p>
                                <input type="file" id="reference_image" name="reference_image" hidden>
                              </div>
                            </div>

                            <div class="col-12 text-center">
                              <button class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-1" type="submit">Submit Enquiry</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>



          </div>
        </div>
      </div>
    </section>
    <!-- Our Specialization -->
    <section class="our-specialization-section">
      <div class="container">
        <div class="section-heading w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-3">Our Specialization</h3>
        </div>
        <div
          class="d-flex gap-0 gap-sm-4 bg-black align-items-center specialization-row flex-wrap flex-lg-nowrap position-relative">
          <div class="position-absolute vector-all vector-1 d-none d-lg-block">
            <img src="{{ ('assets/images/our-specialization-vector.png') }}" alt="images" class="w-100" />
          </div>
          <div class="video-container d-flex justify-content-center align-items-center position-relative">
            <div class="video-img position-relative w-100 h-100">
              <img src="{{ asset('uploads/home/' . $section5->media) }}" alt="Video Thumbnail" class="w-100 h-100 object-fit-cover">
            </div>
          </div>
          <div>
            <div class="specialization-content h-100 d-flex flex-column justify-content-center">
              <h4 class="fs-26 fw-bold text-white">{{ $section5->title }}</h4>
              <p class="fs-16 fw-normal text-gray-600 mb-0">F{{ $section5->description }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- we-offer -->
    <section class="we-offer-section pt-80">
      <div class="container">
        <div class="section-heading w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-3">What We Offer</h3>
          <p class="text-center text-gray-600 fw-normal mb-0 fs-18">Our clients rave about the transformation of their
            spaces,highlighting our attention to detail and creative flair.</p>
        </div>
        <div class="px-12px">
          <div class="row row-gap-60px mb-3 mb-lg-5">
            @foreach($section6 as $offer)
              <div class="col-lg-4 col-6">
                <div class="offer-card bg-black h-100">
                  <div class="offer-bg">
                    <img src="{{ asset('uploads/home/'. $offer->media) }}" alt="images" class="h-100 w-100 object-fit-cover" />
                  </div>
                  <div class="card-content">
                    <p class="fs-23 fw-bold text-white mb-0">{{$offer->title}}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <div class="d-flex text-center justify-content-center mt-4 mt-lg-5">
          <a href="{{ route('products') }}" class="btn btn-primary-bg border-0 text-white w-100 fs-16">View Full Product Range</a>
        </div>
      </div>
    </section>
    <!-- our-process -->
    <div class="pt-80">
      <section class="our-process">
        <div class="container">
          <div class="section-heading w-100 mx-auto">
            <h3 class="fs-40 fw-bold text-center text-white mb-3">{{$section3->title}}</h3>
            <p class="text-center text-gray-600 fw-normal mb-0 fs-18">{{$section3->description}}</p>
          </div>
          <div class="video-container-our pt-80">
            <div class="video-slider">
              <div>
                <div class="video-container d-flex justify-content-center align-items-center position-relative">
                  <button class="play-button position-absolute m-auto top-0 bottom-0 start-0 end-0 border-0 rounded-circle">
                    <i class="fa-solid fa-play text-white"></i>
                  </button>
                  <div class="video-img position-relative">
                    <img src="{{ asset('assets/images/video-full-img.png') }}" alt="Video Thumbnail" class="video-thumbnail">
                    <video class="my-video">
                      <source
                        src="{{ asset('uploads/home/' . $section3->media) }}"
                        type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
              </div>
              <div>
                <div class="video-container d-flex justify-content-center align-items-center position-relative">
                  <button class="play-button position-absolute m-auto top-0 bottom-0 start-0 end-0 border-0 rounded-circle">
                    <i class="fa-solid fa-play text-white"></i>
                  </button>
                  <div class="video-img position-relative">
                    <img src="{{ asset('assets/images/video-full-img.png') }}" alt="Video Thumbnail" class="video-thumbnail">
                    <video class="my-video">
                      <source
                        src="{{ asset('uploads/home/' . $section3->media_2) }}"
                        type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
              </div>
              <div>
                <div class="video-container d-flex justify-content-center align-items-center position-relative">
                  <button class="play-button position-absolute m-auto top-0 bottom-0 start-0 end-0 border-0 rounded-circle">
                    <i class="fa-solid fa-play text-white"></i>
                  </button>
                  <div class="video-img position-relative">
                    <img src="{{ asset('assets/images/video-full-img.png') }}" alt="Video Thumbnail" class="video-thumbnail">
                    <video class="my-video">
                      <source
                        src="{{ asset('uploads/home/' . $section3->media_3) }}"
                        type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
              </div>
              <!-- <div>
                <div class="video-container d-flex justify-content-center align-items-center position-relative">
                  <button class="play-button position-absolute m-auto top-0 bottom-0 start-0 end-0 border-0 rounded-circle">
                    <i class="fa-solid fa-play text-white"></i>
                  </button>
                  <div class="video-img position-relative">
                    <img src="{{ asset('assets/images/video-full-img.png') }}" alt="Video Thumbnail" class="video-thumbnail">
                    <video class="my-video">
                      <source
                        src="{{ asset('uploads/home/' . $section3->media) }}"
                        type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="pt-80">
      <div class="we-are-bg w-100 h-100">
        <img src="{{ asset('uploads/home/' . $section4->media) }}" alt="images" class="w-100 h-100 object-fit-cover" />
      </div>
    </div>
    <!-- choose-section -->
    <section class="choose-section pt-80">
      <div class="px-12px">
        <div class="container">
          <div class="section-heading w-100 mx-auto mb-60">
            <h3 class="fs-40 fw-bold text-center text-white mb-3">{{ $section7->title }}</h3>
          </div>
          <div class="row specialization-row overflow-hidden mx-0">
            <div class="col-lg-5 bg-black ps-0 pe-0 pe-lg-4">
              <div class="choose-img w-100 h-100">
                <img src="{{ ('uploads/home/'. $section7->media) }}" alt="images" class="w-100 h-100 object-fit-cover" />
              </div>
            </div>
            <div class="col-lg-7 bg-black text-white">
              <div class="py-4 pe-3 fs-18">
                {!! $section7->description !!}
                <a href="{{ route('contact_us') }}" class="btn btn-primary-bg border-0 text-white w-100 fs-16 mx-3">Partner With Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- work-with -->
  <section class="work-with-section pt-80">
    <div class="container">
      <div class="px-12px">
        <div class="section-heading w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-3">Clients We Work With</h3>
          <p class="text-center text-gray-600 fw-normal mb-0 fs-18">We proudly serve a wide range of customer</p>
        </div>
        <div class="work-with-slider">
          @foreach($section8 as $workWith)
          <div>
            <div class="d-flex align-items-center work-with-row">
              <div class="work-with-img w-100 h-100">
                <img src="{{ asset('uploads/home/' . $workWith->media) }}" alt="images" class="w-100 h-100 object-fit-cover" />
              </div>
              <div class="work-content w-100 m-auto">
                <h3 class="fs-26 fw-bold text-white mb-3 mb-lg-4">{{ $workWith->title }}</h3>
                <p class="fs-16 text-gray-600 fw-normal mb-3 mb-lg-5">{{ $workWith->description }}</p>
                <a href="{{ route('contact_us') }}" class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-4 d-none d-lg-block">Partner
                  With Us</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- Logistics & Delivery Capabilities -->
  <section class="capabilities-section pt-80">
    <div class="container">
      <div class="px-12px">
        <div class="section-heading w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-3">Logistics & Delivery Capabilities</h3>
          <p class="text-center text-gray-600 fw-normal mb-0 fs-18">Our clients rave about the transformation of their
            spaces,<br class="d-none d-xl-block">highlighting our attention to detail and creative flair.</p>
        </div>
        <div class="row align-items-center row-gap-3">
          <div class="col-lg-6">
            <div class="capabilities-img w-100 h-100 text-center mx-auto">
              <img src="{{ ('uploads/home/'. $section9->media) }}" alt="images" class="h-100 w-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="capabilities-content ms-auto w-100">
              <h3 class="fs-26 fw-normal text-white mb-3 mb-lg-5">{{ $section9->title }}</h3>
              <p class="text-gray-600 fs-16 fw-normal mb-0">{{ $section9->description }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- clients-section -->
  <section class="clients-section pt-80">
    <div class="container">
      <div class="px-12px">
        <div class="section-heading w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-3">What our clients say</h3>
          <p class="text-center text-gray-600 fw-normal mb-0 fs-18">Our clients rave about the transformation of their
            spaces,highlighting our attention to detail and creative flair.</p>
        </div>
        <div class="clients-slider">
          @foreach($clients as $client)
          <div>
            <div class="client-card">
              <div class="client-img rounded-circle h-100 w-100 mx-auto mb-3">
                <img src="{{ ('uploads/clients/'. $client->photo) }}" alt="images"
                  class="h-100 w-100 object-fit-cover rounded-circle" />
              </div>
              <h2 class="fs-18 text-black-100 fw-bold mb-3">{{ $client->name }}</h2>
              <p class="fs-18 fw-normal mb-0 text-black">{{ $client->description }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- contact-section -->
  <section class="contact-section pt-80">
    <div class="container">
      <div class="px-12px">
        <div class="d-flex gap-50 contact-us-main">
          <div class="contact-form">
            <h2 class="fs-18 fw-bold text-gray-600 mb-20">Contact Form</h2>
            <p class="fs-40 fw-bold text-white mb-20">We’d love to hear from you.</p>
            <p class="fs-18 fw-normal text-gray-600 mb-20">Just fill in the form below and our team will reach out
              shortly.</p>

            @include('website_partials.contact_us')

          </div>
          <div class="position-relative contact-images w-100">
            <div class="contact-bg-1 position-absolute w-100 h-100">
              <img src="{{ ('assets/images/contact-bg-1.jpg') }}" alt="images" class="h-100 w-100 object-fit-cover" />
            </div>
            <div class="contact-bg-2 ms-auto w-100 h-100">
              <img src="{{ ('assets/images/contact-bg-2.jpg') }}" alt="images" class="h-100 w-100 object-fit-cover" />
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- to-gethere-section -->
  <section class="pt-80">
    <div class="to-gethere-section">
      <div class="container">
        <div class="section-heading w-100 mx-auto">
          <h3 class="fs-40 fw-bold text-center text-white mb-4">Let’s Work Together</h3>
          <p class="text-center text-gray-600 fw-normal mb-4 fs-18">Looking for the best black granite supplier?
            <br class="d-none d-xxl-block">
            Contact us today and experience unmatched quality, precision, and professionalism
          </p>
          <div class="d-flex justify-content-center">
            <a class="btn btn-primary-bg border-0 text-white w-100 fs-16"  data-bs-toggle="modal"
            data-bs-target="#touchModal2">Enquire Now</a>
            <div class="modal fade touch-modal" id="touchModal2" tabindex="-1" aria-labelledby="touchModal"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content mx-0 mx-sm-3 mx-lg-0">
                  <div class="d-flex justify-content-between align-items-center gap-3 pb-2 mb-4">
                    <h2 class="fs-24 text-white fw-bold">Get In Touch</h2>
                    <button type="button" class="text-white bg-transparent border-0 p-0" data-bs-dismiss="modal"
                      aria-label="Close">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path
                          d="M13 1C12.8125 0.81253 12.5582 0.707214 12.293 0.707214C12.0278 0.707214 11.7735 0.81253 11.586 1L7 5.586L2.414 1C2.22647 0.81253 1.97217 0.707214 1.707 0.707214C1.44184 0.707214 1.18753 0.81253 1 1C0.81253 1.18753 0.707214 1.44184 0.707214 1.707C0.707214 1.97217 0.81253 2.22647 1 2.414L5.586 7L1 11.586C0.81253 11.7735 0.707214 12.0278 0.707214 12.293C0.707214 12.5582 0.81253 12.8125 1 13C1.18753 13.1875 1.44184 13.2928 1.707 13.2928C1.97217 13.2928 2.22647 13.1875 2.414 13L7 8.414L11.586 13C11.7735 13.1875 12.0278 13.2928 12.293 13.2928C12.5582 13.2928 12.8125 13.1875 13 13C13.1875 12.8125 13.2928 12.5582 13.2928 12.293C13.2928 12.0278 13.1875 11.7735 13 11.586L8.414 7L13 2.414C13.1875 2.22647 13.2928 1.97217 13.2928 1.707C13.2928 1.44184 13.1875 1.18753 13 1Z"
                          fill="white" />
                      </svg>
                    </button>
                  </div>
                  <form method="POST" action="{{ route('get_in_touch.store') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                          <div class="col-lg-6">
                              <input type="text" name="full_name" class="form-control mb-3 fs-16" placeholder="Full Name *" value="{{ old('full_name') }}" required />
                              @error('full_name')<div class="text-danger small">{{ $message }}</div>@enderror
                          </div>
                          <div class="col-lg-6">
                              <input type="text" name="phone" class="form-control mb-3 fs-16" placeholder="Phone Number (with country code)" value="{{ old('phone') }}" required />
                              @error('phone')<div class="text-danger small">{{ $message }}</div>@enderror
                          </div>
                          <div class="col-lg-6">
                              <input type="text" name="company_name" class="form-control mb-3 fs-16" placeholder="Company Name (Optional)" value="{{ old('company_name') }}" />
                              @error('company_name')<div class="text-danger small">{{ $message }}</div>@enderror
                          </div>
                          <div class="col-lg-6">
                              <input type="email" name="email" class="form-control mb-3 fs-16" placeholder="Email ID *" value="{{ old('email') }}" required />
                              @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
                          </div>
                          <div class="col-lg-6">
                              <input type="text" name="location" class="form-control mb-3 fs-16" placeholder="Your Location" value="{{ old('location') }}" />
                              @error('location')<div class="text-danger small">{{ $message }}</div>@enderror
                          </div>

                          <div class="col-lg-12 mb-3">
                              <label class="fs-16 fw-semibold">Select Product Types *</label>
                              <div class="row">
                                  @foreach(['Blocks','Slabs (2cm–30cm)','Cut-to-Size Orders / Project Supply','Tiles','Cobble Stones','Monuments','Export Inquiry','Other'] as $type)
                                      <div class="col-md-4">
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="looking_for[]" value="{{ $type }}" id="looking_{{ $loop->index }}" {{ is_array(old('looking_for')) && in_array($type, old('looking_for')) ? 'checked' : '' }}>
                                              <label class="form-check-label text-gray-600 fs-16" for="looking_{{ $loop->index }}">{{ $type }}</label>
                                          </div>
                                      </div>
                                  @endforeach
                              </div>
                              @error('looking_for')<div class="text-danger small">{{ $message }}</div>@enderror
                          </div>

                          <div class="col-lg-12">
                              <textarea name="details" class="form-control mb-3 fs-16" placeholder="Any specific details, sizes, or queries?" rows="4">{{ old('details') }}</textarea>
                              @error('details')<div class="text-danger small">{{ $message }}</div>@enderror
                          </div>

                          <div class="col-lg-12 mb-3">
                              <label class="fs-16 fw-normal">Upload Reference Image (Optional)</label>
                              <input type="file" name="reference_image" class="form-control">
                              @error('reference_image')<div class="text-danger small">{{ $message }}</div>@enderror
                          </div>
                      </div>

                      @if(session('success'))
                          <div class="alert alert-success">{{ session('success') }}</div>
                      @endif

                      <div class="text-center">
                          <button type="submit" class="btn btn-primary-bg border-0 text-white w-100 fs-16">Submit Enquiry</button>
                      </div>
                  </form>



                </div>
              </div>
          </div>
          </div>
        </div>
      </div>

    </div>
  </section>



@endsection
