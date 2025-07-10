@extends('layouts.website')
@section('title', 'Bimla Stones - About Us')
@section('content')
  <!-- about-hero-section -->
  <section class="about-hero-section px-12px">
    <div class="container">
      <div class="hero-section">
        <div class="row row-gap-3">
          <div class="col-lg-6 mt-0 mt-lg-4">
            <h2 class="fs-40 fw-bold text-white mb-2 mb-lg-3  text-center text-lg-start">{{$section1->title}}
            </h2>
            <p class="fs-18 text-gray-600 mb-0 fw-normal">{{$section1->description}}
            </p>
          </div>
          <div class="col-lg-6">
            <div class="about-hero-img h-100 w-100">
              <img src="{{ asset('uploads/about_us/' . $section1->media) }}" alt="images" class="h-100 w-100 object-fit-cover" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="capacity-section pt-80">
    <div class="px-12px">
      <div class="container">
        <div class="section-heading w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-3">Production Capacity</h3>
          <p class="text-center text-gray-600 fw-bold mb-0 fs-18">2.5 Lakh+ Sq. Ft. Every Month</p>
        </div>
        <div class="capacity-card d-flex h-100 flex-column mb-60">
          <div
            class="video-container d-flex justify-content-center align-items-center position-relative overflow-hidden">
            <button class="play-button position-absolute m-auto top-0 bottom-0 start-0 end-0 border-0 rounded-circle">
              <i class="fa-solid fa-play text-white"></i>
            </button>
            <div class="video-img position-relative">
              <img src="{{ asset('assets/images/video-full-img.png') }}" alt="Video Thumbnail" class="video-thumbnail">
              <video class="my-video">
                <source
                  src="{{ asset('uploads/about_us/' . $section2->media) }}"
                  type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
          <div class="px-4">
            <h2 class="fs-40 text-white fw-bold mb-3 mb-lg-4">{{$section2->title}}</h2>
            <p class="fs-18 fw-normal text-gray-600 mb-3 mb-lg-4">
                {{$section2->description}}
            </p>
          </div>
        </div>
        <div class="production-slider">
          @foreach ($section3 as $item)
            <div>
              <div class="production-card bg-black h-100 d-flex flex-column overflow-hidden">
                <div class="production-img w-100 h-100">
                  <img src="{{ asset('uploads/about_us/'. $item->media) }}" alt="images" class="h-100 w-100 object-fit-cover" />
                </div>
                <div class="production-content">
                  <h3 class="fs-23 fw-bold text-white mb-2 mb-lg-3">{{$item->title}}</h3>
                  <p class="fs-18 fw-normal text-gray-600 mb-0">{{$item->description}}</p>
                </div>
              </div>
            </div>
          @endforeach
          
        </div>
      </div>
    </div>
  </section>
  <section class="pt-80 trust-section">
    <div class="container">
      <div class="px-12px">
        <div class="w-100 mx-auto mb-120px">
          <h3 class="fs-40 fw-bold text-center text-white mb-3">{{$section4->title}}</h3>
          <p class="text-start text-gray-600 fw-normal mb-0 fs-18">{{$section4->description}}</p>
        </div>
      </div>
    </div>
    <div class="trust-img h-100 w-100 mb-120px">
      <img src="{{ asset('uploads/about_us/' . $section4->media) }}" alt="images" class="h-100 w-100 object-fit-cover" />
    </div>
    <div class="container">
      <div class="px-12px">
        <div class="row row-gap-4">
          <div class="col-lg-6">
            <h3 class="fs-40 text-white fw-bold mb-3">{{$section5->title}}</h3>
            <p class="fs-18 text-gray-600 fw-normal mb-0">{{$section5->description}}</p>
          </div>
          <div class="col-lg-6">
            <div class="decide-img h-100 w-100">
              <img src="{{ asset('uploads/about_us/' . $section5->media) }}" alt="images" class="h-100 w-100 object-fit-cover" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="partner-section pt-80">
    <div class="px-12px">
      <div class="container">
        <div class="w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-0">{{$section6->title}}</h3>
        </div>
        <div class="row stands-row overflow-hidden mx-0">
          <div class="col-lg-5 bg-black ps-0 pe-0 pe-lg-4">
            <div class="choose-img w-100 h-100">
              <img src="{{ asset('uploads/about_us/' . $section6->media) }}" alt="images" class="w-100 h-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-7 bg-black">
            <div class="d-flex justify-content-center align-items-center h-100 px-12px px-3">
              <div class="py-4 pe-0 pe-lg-3">
                <p class="fs-18 text-gray-600 fw-normal mb-3 mb-lg-4">
                </p>
                <p class="fs-18 text-gray-600 fw-normal mb-3 mb-lg-4">We proudly partner with dealers nationwide,
                  offering them consistent stone quality and flexible fulfillment options.</p>
                <p class="fs-18 text-gray-600 fw-normal mb-3 mb-lg-4">Our team brings hands-on experience working with
                  clients across the globe. We’ve partnered with some of the most prominent quarries to source premium
                  raw materials, all processed at our expansive and advanced manufacturing plant.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about-hero-section -->
  <section class="about-hero-section px-12px">
    <div class="container">
      <div class="hero-section">
        <div class="px-12px">
          <div class="row row-gap-3 my-2 py-1 my-sm-0 py-sm-0">
            <div class="col-lg-6 mt-0 mt-lg-4">
              <h2 class="fs-40 fw-bold text-white mb-2 mb-lg-3  text-center text-lg-start">{{$section7->title}}</h2>
              {!! $section7->description !!}
            </div>
            <div class="col-lg-6">
              <div class="about-hero-img h-100 w-100">
                <img src="{{ asset('uploads/about_us/' . $section7->media) }}" alt="images" class="h-100 w-100 object-fit-cover" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="leadership-section pt-80">
    <div class="container">
      <div class="px-12px">
        <div class="section-heading w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-3">OUR LEADERSHIP</h3>
          <p class="text-center text-gray-600 fw-normal mb-0 fs-18">BIMLA STONE IS PROUDLY LED BY A TEAM THAT COMBINES DEEP INDUSTRY EXPERIENCE WITH A FUTURE-FORWARD VISION.</p>
        </div>
        <div class="leadership-slider">
          @foreach ($leaders as $leader)
            <div>
              <div class="leadership-card">
                <div class="leadership-img rounded-circle h-100 w-100 mx-auto mb-3">
                  <img src="{{ asset('uploads/about_us/'. $leader->media) }}" alt="images"
                    class="h-100 w-100 object-fit-cover rounded-circle" />
                </div>
                <h2 class="fs-18 text-black-100 fw-bold mb-3">{{$leader->title}}</h2>
                <p class="fs-18 fw-normal mb-0 text-black">{{$leader->description}}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- Ready-section -->
  <div class="pt-80">
    <section class="ready-section w-100 mx-auto">
      <div class="container">
        <div class="section-heading w-100 mx-auto">
          <h3 class="fs-40 fw-bold text-center text-white mb-4">Experience the difference of working with people who
            care.</h3>
          <div class="d-flex justify-content-center">
            <a class="btn btn-primary-bg border-0 text-white w-100 fs-16"  data-bs-toggle="modal"
            data-bs-target="#touchModal2">Get In Touch</a>
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
                  <form>
                    <div class="row">
                      <div class="col-lg-6">
                        <input type="text" class="form-control mb-3 fs-16" placeholder="Full Name *" required />
                      </div>
                      <div class="col-lg-6">
                        <input type="text" class="form-control mb-3 fs-16" placeholder="Phone Number* (with country code)"
                          required />
                      </div>
                      <div class="col-lg-6">
                        <input type="text" class="form-control mb-3 fs-16" placeholder="Company Name (Optional)"
                          required />
                      </div>
                      <div class="col-lg-6">
                        <div class="dropdown mb-3">
                          <button class="form-control dropdown-toggle d-flex justify-content-between align-items-center"
                            type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            Product Type
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gettouch_9" />
                              <label class="form-check-label fs-16 fw-normal text-gray-600" for="gettouch_9">
                                Blocks
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gettouch_10" />
                              <label class="form-check-label fs-16 fw-normal text-gray-600" for="gettouch_10">
                                Slabs (2cm–30cm)
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gettouch_11" />
                              <label class="form-check-label fs-16 fw-normal text-gray-600" for="gettouch_11">
                                Cut-to-Size Orders / Project Supply
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gettouch_12" />
                              <label class="form-check-label fs-16 fw-normal text-gray-600" for="gettouch_12">
                                Tiles
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gettouche_13" />
                              <label class="form-check-label fs-16 fw-normal text-gray-600" for="gettouch_13">
                                Cobble Stones
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gettouch_14" />
                              <label class="form-check-label fs-16 fw-normal text-gray-600" for="gettouch_14">
                                Monuments
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gettouch_15" />
                              <label class="form-check-label fs-16 fw-normal text-gray-600" for="gettouch_15">
                                Export Inquiry
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gettouch_16" />
                              <label class="form-check-label fs-16 fw-normal text-gray-600" for="gettouch_16">
                                Other
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <input type="text" class="form-control mb-3 fs-16" placeholder="Email ID *" required />
                      </div>
                      <div class="col-lg-6">
                        <input type="text" class="form-control mb-3 fs-16" placeholder="Your Location" required />
                      </div>
                    </div>

                    <textarea class="form-control mb-3 fs-16" placeholder="Any specific details, sizes, or queries?"
                      rows="4"></textarea>
                    <h3 class="fs-18 fw-normal text-gray-600 mb-3">Upload a reference image (if any)</h3>
                    <div class="file-upload-box" onclick="document.getElementById('myFile1').click();">
                      <p class="fs-16 text-gray-600 fw-normal mb-0">Upload Image</p>
                      <input type="file" id="myFile1" name="filename" hidden>
                    </div>
                    <div class="text-center">
                      <button class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-1" type="submit">Submit
                        Enquiry</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- team-section -->
  <section class="pt-80">
    <div class="team-section">
      <div class="container">
        <div class="text-center">
          <h2 class="fs-40 fw-bold text-white mb-3 mb-lg-4">Join Our Team</h2>
          <p class="fs-18 fw-normal text-gray-600 mb-3 mb-lg-4">Interested in joining our team?  <br>
            We’re always open to skilled professionals who share our passion for granite, design, and excellent service.
            Whether you’re an experienced architect, a craftsperson, or someone who genuinely loves the art of natural
            stones, we’d love to hear from you.</p>
          <p class="fs-18 fw-normal text-gray-600 mb-3 mb-lg-4">At Bimla Stone, it’s not just about the products, it’s
            about people, creativity, and building something beautiful together.</p>
          <p class="fs-18 fw-bold text-gray-600 mb-3 mb-lg-4">Drop us a message or your resume here at</p>
          <a href="mailto:info@bimlastone.com"
            class="btn btn-primary-bg border-0 text-white w-100 fs-16 mb-3 break-all text-decoration-underline">info@bimlastone.com</a>
          <p class="fs-18 fw-bold text-gray-600 mb-0">Let’s create something timeless.</p>
        </div>
      </div>
    </div>
  </section>
@endsection
