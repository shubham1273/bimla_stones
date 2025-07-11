@extends('layouts.website')
@section('title', 'Bimla Stones')
@section('content')
<!-- full-video-container -->
  <div class="full-video-container">
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
          <img src="{{ asset('assets/images/grt-touch.png') }}" alt="get-touch-img" class="w-100 h-100 object-fit-cover">
        </div>
        <div class="get-touch-content">
          <p class="text-white fs-40 fw-normal mb-40 text-uppercase">Blending creativity and functionality in every
            design</p>
          <button class="btn btn-black border-0 text-white w-100 fs-16" data-bs-toggle="modal"
            data-bs-target="#touchModal">Get In Touch</button>
          <div class="modal fade touch-modal" id="touchModal" tabindex="-1" aria-labelledby="touchModal"
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
                          type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Product Type
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="getQuote_9" />
                            <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_9">
                              Blocks
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="getQuote_10" />
                            <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_10">
                              Slabs (2cm–30cm)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="getQuote_11" />
                            <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_11">
                              Cut-to-Size Orders / Project Supply
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="getQuote_12" />
                            <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_12">
                              Tiles
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="getQuote_13" />
                            <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_13">
                              Cobble Stones
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="getQuote_14" />
                            <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_14">
                              Monuments
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="getQuote_15" />
                            <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_15">
                              Export Inquiry
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="getQuote_16" />
                            <label class="form-check-label fs-16 fw-normal text-gray-600" for="getQuote_16">
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
                  <!-- <div class="file-upload-box">
                    <input type="file" id="myFile" name="filename" placeholder="Upload Image">
                   </div> -->
                  <div class="file-upload-box" onclick="document.getElementById('myFile').click();">
                    <p class="fs-16 text-gray-600 fw-normal mb-0">Upload Image</p>
                    <input type="file" id="myFile" name="filename" hidden>
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
  <!-- our-process -->
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
    <div class="pt-80">
      <div class="we-are-bg w-100 h-100">
        <img src="{{ asset('uploads/home/' . $section4->media) }}" alt="images" class="w-100 h-100 object-fit-cover" />
      </div>
    </div>

  </section>
  <!-- Our Specialization -->
  <section class="our-specialization-section pt-80">
    <div class="container">
      <div class="section-heading w-100 mx-auto mb-60">
        <h3 class="fs-40 fw-bold text-center text-white mb-3">Our Specialization</h3>
      </div>
      <div
        class="d-flex gap-0 gap-sm-4 bg-black align-items-center specialization-row flex-wrap flex-lg-nowrap position-relative">
        <div class="position-absolute vector-all vector-1 d-none d-lg-block">
          <img src="{{ asset('assets/images/our-specialization-vector.png') }}" alt="images" class="w-100" />
        </div>
        <div class="video-container d-flex justify-content-center align-items-center position-relative">
          <button class="play-button position-absolute m-auto top-0 bottom-0 start-0 end-0 border-0 rounded-circle">
            <i class="fa-solid fa-play text-white"></i>
          </button>
          <div class="video-img position-relative">
            <img src="{{ asset('assets/images/our-specialization-bg-video.jpg') }}" alt="Video Thumbnail" class="video-thumbnail">
            <video class="my-video">
              <source
                src="https://media.geeksforgeeks.org/wp-content/uploads/20231020155223/Full-Stack-Development-_-LIVE-Classes-_-GeeksforGeeks.mp4"
                type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
        </div>
        <div>
          <div class="specialization-content h-100 d-flex flex-column justify-content-center">
            <h4 class="fs-26 fw-bold text-white">Exclusively Focused on Black Granite</h4>
            <p class="fs-16 fw-normal text-gray-600 mb-0">From Ultimate Black to Nova Black, we process only the best
              black granite. Each block and stone is precision-cut, quality-checked, and delivered with care. Whether
              it's for a luxury project or a large-scale supply, our stones deliver unmatched quality.</p>
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
          spaces, highlighting our attention to detail and creative flair.</p>
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
        <a href="product.html" class="btn btn-primary-bg border-0 text-white w-100 fs-16">View Full Product Range</a>
      </div>
    </div>
  </section>
  <!-- choose-section -->
  <section class="choose-section pt-80">
    <div class="px-12px">
      <div class="container">
        <div class="section-heading w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-3">Why Choose Us</h3>
        </div>
        <div class="row specialization-row overflow-hidden mx-0">
          <div class="col-lg-5 bg-black ps-0 pe-0 pe-lg-4">
            <div class="choose-img w-100 h-100">
              <img src="{{ asset('assets/images/choose-img.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-7 bg-black">
            <div class="py-4 pe-3 ">
              <ul class="mb-40">
                <li class="fs-18 text-gray-600 fw-normal fs-18 mb-2"><span class="text-white fs-24">High-Volume
                    Capacity: </span> 2.5 lakh+ sq. ft. monthly output (65–70+ containers).</li>
                <li class="fs-18 text-gray-600 fw-normal fs-18 mb-2"><span class="text-white fs-24">Eco-Responsible
                    Facility: </span> Solar-powered, automated, and water-efficient.</li>
                <li class="fs-18 text-gray-600 fw-normal fs-18 mb-2"><span class="text-white fs-24">Reliable Global
                    Shipping: </span>PAN India and international delivery capabilities</li>
                <li class="fs-18 text-gray-600 fw-normal fs-18 mb-2"><span class="text-white fs-24">Clear Communication:
                  </span> Honest updates and committed timelines, every step of the way</li>
                <li class="fs-18 text-gray-600 fw-normal fs-18 mb-2"><span class="text-white fs-24">Trusted by Global
                    Clients: </span>Proven experience in managing international projects with ease</li>
                <li class="fs-18 text-gray-600 fw-normal fs-18 mb-2"><span class="text-white fs-24">Strong Quarry
                    Partnerships: </span> Direct tie-ups with reputed black granite quarries</li>
                <li class="fs-18 text-gray-600 fw-normal fs-18 mb-0"><span class="text-white fs-24">Modern & Large-Scale
                    Facility: </span>Well-equipped plant designed for high-volume, quality production</li>
              </ul>
              <a href="contact-us.html" class="btn btn-primary-bg border-0 text-white w-100 fs-16 mx-3">Partner With Us</a>
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
          <div>
            <div class="d-flex align-items-center work-with-row">
              <div class="work-with-img w-100 h-100">
                <img src="{{ asset('assets/images/work-with.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
              </div>
              <div class="work-content w-100 m-auto">
                <h3 class="fs-26 fw-bold text-white mb-3 mb-lg-4">Builders & Developers</h3>
                <p class="fs-16 text-gray-600 fw-normal mb-3 mb-lg-5">For large-scale residential or commercial granite
                  needs.</p>
                <a href="contact-us.html" class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-4 d-none d-lg-block">Partner
                  With Us</a>
              </div>
            </div>
          </div>
          <div>
            <div class="d-flex align-items-center work-with-row">
              <div class="work-with-img w-100 h-100">
                <img src="{{ asset('assets/images/work-with.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
              </div>
              <div class="work-content w-100 m-auto">
                <h3 class="fs-26 fw-bold text-white mb-3 mb-lg-4">Retailers & Distributors</h3>
                <p class="fs-16 text-gray-600 fw-normal mb-3 mb-lg-5">Reliable bulk granite supply with consistent
                  quality.</p>
                <a href="contact-us.html" class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-4 d-none d-lg-block">Partner
                  With Us</a>
              </div>
            </div>
          </div>
          <div>
            <div class="d-flex align-items-center work-with-row">
              <div class="work-with-img w-100 h-100">
                <img src="{{ asset('assets/images/work-with.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
              </div>
              <div class="work-content w-100 m-auto">
                <h3 class="fs-26 fw-bold text-white mb-3 mb-lg-4">Architects & Designers</h3>
                <p class="fs-16 text-gray-600 fw-normal mb-3 mb-lg-5">Custom finishes & cut-to-size units for statement
                  projects</p>
                <a href="contact-us.html" class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-4 d-none d-lg-block">Partner
                  With Us</a>
              </div>
            </div>
          </div>
          <div>
            <div class="d-flex align-items-center work-with-row">
              <div class="work-with-img w-100 h-100">
                <img src="{{ asset('assets/images/work-with.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
              </div>
              <div class="work-content w-100 m-auto">
                <h3 class="fs-26 fw-bold text-white mb-3 mb-lg-4">Memorial & Monument Designers</h3>
                <p class="fs-16 text-gray-600 fw-normal mb-3 mb-lg-5">High-density black granite for detailed
                  craftsmanship.</p>
                <a href="contact-us.html" class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-4 d-none d-lg-block">Partner
                  With Us</a>
              </div>
            </div>
          </div>
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
            spaces,<br class="d-none d-xl-block"> highlighting our attention to detail and creative flair.</p>
        </div>
        <div class="row align-items-center row-gap-3">
          <div class="col-lg-6">
            <div class="capabilities-img w-100 h-100 text-center mx-auto">
              <img src="{{ asset('assets/images/capabilities-img.png') }}" alt="images" class="h-100 w-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="capabilities-content ms-auto w-100">
              <h3 class="fs-26 fw-normal text-white mb-3 mb-lg-5">Watch Our Demo for Confirmation</h3>
              <p class="text-gray-600 fs-16 fw-normal mb-0">Watch our demo video to experience our design solutions
                firsthand. See how we bring creativity and precision to each project. This video showcases our
                commitment to quality and attention to detail.Get a clear understanding of how our services can
                transform your space.</p>
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
            spaces, highlighting our attention to detail and creative flair.</p>
        </div>
        <div class="clients-slider">
          <div>
            <div class="client-card">
              <div class="client-img rounded-circle h-100 w-100 mx-auto mb-3">
                <img src="{{ asset('assets/images/client-1.png') }}" alt="images"
                  class="h-100 w-100 object-fit-cover rounded-circle" />
              </div>
              <h2 class="fs-18 text-black-100 fw-bold mb-3">John Carter</h2>
              <p class="fs-18 fw-normal mb-0 text-black">Our living room was completely transformed! The team captured
                our vision perfectly and exceeded our expectations.</p>
            </div>
          </div>
          <div>
            <div class="client-card">
              <div class="client-img rounded-circle h-100 w-100 mx-auto mb-3">
                <img src="{{ asset('assets/images/client-2.png') }}" alt="images"
                  class="h-100 w-100 object-fit-cover rounded-circle" />
              </div>
              <h2 class="fs-18 text-black-100 fw-bold mb-3">Sophie Moore</h2>
              <p class="fs-18 fw-normal mb-0 text-black">Professional and creative! The design process was smooth, and
                the results are stunning. Highly recommend their services</p>
            </div>
          </div>
          <div>
            <div class="client-card">
              <div class="client-img rounded-circle h-100 w-100 mx-auto mb-3">
                <img src="{{ asset('assets/images/client-3.png') }}" alt="images"
                  class="h-100 w-100 object-fit-cover rounded-circle" />
              </div>
              <h2 class="fs-18 text-black-100 fw-bold mb-3">Matt Cannon</h2>
              <p class="fs-18 fw-normal mb-0 text-black">Their attention to detail and commitment to quality turned our
                house into a home we love. Outstanding work!</p>
            </div>
          </div>
          <div>
            <div class="client-card">
              <div class="client-img rounded-circle h-100 w-100 mx-auto mb-3">
                <img src="{{ asset('assets/images/client-1.png') }}" alt="images"
                  class="h-100 w-100 object-fit-cover rounded-circle" />
              </div>
              <h2 class="fs-18 text-black-100 fw-bold mb-3">John Carter</h2>
              <p class="fs-18 fw-normal mb-0 text-black">Our living room was completely transformed! The team captured
                our vision perfectly and exceeded our expectations.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact-section -->
  <section class="contact-section pt-80">
    <div class="container">
      <div class="px-12px">
        <div class="d-flex gap-50">
          <div class="contact-form">
            <h2 class="fs-18 fw-bold text-gray-600 mb-20">Contact Form</h2>
            <p class="fs-40 fw-bold text-white mb-20">We’d love to hear from you.</p>
            <p class="fs-18 fw-normal text-gray-600 mb-20">Just fill in the form below and our team will reach out
              shortly.</p>
            <form>
              <div class="mb-40">
                <input type="text" class="form-control w-100 mb-2 mb-sm-3 mb-lg-4 text-white fw-normal fs-16"
                  placeholder="Name" required />
                <input type="text" class="form-control w-100 mb-2 mb-sm-3 mb-lg-4 text-white fw-normal fs-16"
                  placeholder="Email" required />
                <input type="text" class="form-control w-100 mb-2 mb-sm-3 mb-lg-4 text-white fw-normal fs-16"
                  placeholder="Phone Number" required />
                <input type="text" class="form-control w-100 mb-2 mb-sm-3 mb-lg-4 text-white fw-normal fs-16"
                  placeholder="Company Name" required />
                <input type="text" class="form-control w-100 text-white fw-normal fs-16"
                  placeholder="Your Country / Location" required />
              </div>
              <h3 class="fs-16 fw-semibold text-white mb-3">Consent & Submit*</h3>
              <div class="mb-40 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label fs-16 text-gray-600 fw-normal" for="exampleCheck1">I consent to Bimla
                  Stone using my information to respond to my query</label>
              </div>
              <button type="submit" class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-0 mt-lg-4">Submit Your
                Enquiry</button>
            </form>
          </div>
          <div class="position-relative contact-images w-100">
            <div class="contact-bg-1 position-absolute w-100 h-100">
              <img src="{{ asset('assets/images/contact-bg-1.jpg') }}" alt="images" class="h-100 w-100 object-fit-cover" />
            </div>
            <div class="contact-bg-2 ms-auto w-100 h-100">
              <img src="{{ asset('assets/images/contact-bg-2.jpg') }}" alt="images" class="h-100 w-100 object-fit-cover" />
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
                      <button class="btn btn-primary-bg border-0 text-white w-100 fs-16 mt-1" type="submit">Submit Enquiry</button>
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