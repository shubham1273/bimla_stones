@extends('layouts.website')
@section('title', 'Bimla Stones - Manufacture Process')
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
  <section class="pt-60  process-section">
    <div class="container">
      <div class="px-12px">
        <div class="section-heading w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-3">Our Process</h3>
          <p class="text-start text-sm-center text-gray-600 fw-normal mb-0 fs-18">From <span
              class="fw-bold">Quarry</span> to <span class="fw-bold">Quality</span> – Here’s How We Work.</p>
        </div>
        <div class="process-video">
          <div
            class="video-container d-flex justify-content-center align-items-center position-relative overflow-hidden">
            <button class="play-button position-absolute m-auto top-0 bottom-0 start-0 end-0 border-0 rounded-circle">
              <i class="fa-solid fa-play"></i>
            </button>
            <div class="video-img position-relative">
              <img src="{{ asset('assets/images/process-video-bg.jpg') }}" alt="Video Thumbnail" class="video-thumbnail">
              <video class="my-video">
                <source
                  src="https://media.geeksforgeeks.org/wp-content/uploads/20231020155223/Full-Stack-Development-_-LIVE-Classes-_-GeeksforGeeks.mp4"
                  type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-80">
    <div class="px-12px">
      <div class="container">
        <div class="categories-slider-section mb-40">
          <div class="categories-slider">
            <div>
              <div class="categories-card d-flex gap-2 gap-lg-3">
                <div class="categories-count">
                  <img src="{{ asset('assets/images/count-1.svg') }}" alt="images" />
                </div>
                <div class="d-flex gap-2 row-gap-3 align-items-start w-100 flex-column flex-lg-row">
                  <div class="categories-content">
                    <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3">Sourcing the Finest Raw Stones</h3>
                    <p class="fs-16 fw-normal text-gray-600 mb-0">Our journey begins at the quarry. Expert block markers
                      hand-select granite blocks from approved quarry sites, ensuring every piece is free from cracks,
                      patches, fissures, or color inconsistencies. Each block is marked, numbered, and classified into
                      categories such as Gang-Saw, Mini Gang-Saw, Cutter Blocks, based on precise dimensions and
                      use-case suitability.
                    </p>
                  </div>
                  <div class="categories-slider-img h-100 w-100">
                    <img src="{{ asset('assets/images/categories-slider-img-1.jpg') }}" alt="images"
                      class="h-100 w-100 object-fit-cover" />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="categories-card d-flex gap-2 gap-lg-3">
                <div class="categories-count">
                  <img src="{{ asset('assets/images/count-2.svg') }}" alt="images" />
                </div>
                <div class="d-flex gap-2 row-gap-3 align-items-start w-100 flex-column flex-lg-row">
                  <div class="categories-content">
                    <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3"> Block Dressing & Pre-Cutting</h3>
                    <p class="fs-16 fw-normal text-gray-600 mb-0">Once the blocks reach our factory yard, they go
                      through a critical dressing phase using a mono wire-saw machine. This brings the block into a
                      perfect cube, allowing all surfaces to be properly assessed. Only blocks that pass this inspection
                      move forward. Depending on client requirements, we categorize the order as “Process on Order,”
                      “Regular Order,” or “Cut-to-Size,” each with its own pathway of customization.
                    </p>
                  </div>
                  <div class="categories-slider-img h-100 w-100">
                    <img src="{{ asset('assets/images/categories-slider-img-2.jpg') }}" alt="images"
                      class="h-100 w-100 object-fit-cover" />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="categories-card d-flex gap-2 gap-lg-3">
                <div class="categories-count">
                  <img src="{{ asset('assets/images/count-3.svg') }}" alt="images" />
                </div>
                <div class="d-flex gap-2 row-gap-3 align-items-start w-100 flex-column flex-lg-row">
                  <div class="categories-content">
                    <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3"> Cutting into Precision Slabs</h3>
                    <p class="fs-16 fw-normal text-gray-600 mb-0">The dressed blocks are then sent to our multi wire-saw
                      machine, where they’re cut into slabs with high accuracy. We can deliver slabs in various
                      thicknesses like  2 cm-30 cm depending on client needs. Our exceptional cutting line can process
                      up to 4550 square feet of granite in just 8 hours, ensuring both speed and scale.
                    </p>
                  </div>
                  <div class="categories-slider-img h-100 w-100">
                    <img src="{{ asset('assets/images/categories-slider-img-1.jpg') }}" alt="images"
                      class="h-100 w-100 object-fit-cover" />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="categories-card d-flex gap-2 gap-lg-3">
                <div class="categories-count">
                  <img src="{{ asset('assets/images/count-4.svg') }}" alt="images" />
                </div>
                <div class="d-flex gap-2 row-gap-3 align-items-start w-100 flex-column flex-lg-row">
                  <div class="categories-content">
                    <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3"> Surface Finishing & Textures</h3>
                    <p class="fs-16 fw-normal text-gray-600 mb-0">The freshly cut slabs undergo surface finishing
                      through our line polishing machine, which comes equipped with edge cutting and flaming
                      capabilities. We offer multiple finishes like Polished, Leathered, Honed, Flamed, Flamed &
                      Brushed, and Dual Finish (different finishes on either side), tailored to your requirements. This
                      step gives the granite its final texture, gloss, and utility. 
                    </p>
                  </div>
                  <div class="categories-slider-img h-100 w-100">
                    <img src="{{ asset('assets/images/categories-slider-img-2.jpg') }}" alt="images"
                      class="h-100 w-100 object-fit-cover" />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="categories-card d-flex gap-2 gap-lg-3">
                <div class="categories-count">
                  <img src="{{ asset('assets/images/count-5.svg') }}" alt="images" />
                </div>
                <div class="d-flex gap-2 row-gap-3 align-items-start w-100 flex-column flex-lg-row">
                  <div class="categories-content">
                    <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3"> Quality Checks at Every Stage</h3>
                    <p class="fs-16 fw-normal text-gray-600 mb-0">Quality is checked at every step,  from initial block
                      selection to final slab inspection. Every 5th slab in a block is taken through the complete
                      process for a thorough quality check. If it meets the required standards, the remaining slabs in
                      that block are then processed. This method helps identify any internal defects early on and saves
                      valuable production time. 
                    </p>
                  </div>
                  <div class="categories-slider-img h-100 w-100">
                    <img src="{{ asset('assets/images/categories-slider-img-2.jpg') }}" alt="images"
                      class="h-100 w-100 object-fit-cover" />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="categories-card d-flex gap-2 gap-lg-3">
                <div class="categories-count">
                  <img src="{{ asset('assets/images/count-6.svg') }}" alt="images" />
                </div>
                <div class="d-flex gap-2 row-gap-3 align-items-start w-100 flex-column flex-lg-row">
                  <div class="categories-content">
                    <h3 class="fs-24 fw-bold text-white mb-2 mb-md-3">Secure Packing & Global Dispatch</h3>
                    <p class="fs-16 fw-normal text-gray-600 mb-0">Once approved, the slabs are carefully packed using
                      fumigated wooden crates with premium packing material and reinforced lashing. Our packaging
                      standards are designed to withstand both domestic handling and international transit. Every order
                      is customized to suit client preferences — with crystal-clear documentation and transparent
                      tracking. 
                    </p>
                  </div>
                  <div class="categories-slider-img h-100 w-100">
                    <img src="{{ asset('assets/images/categories-slider-img-2.jpg') }}" alt="images"
                      class="h-100 w-100 object-fit-cover" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex gap-2 ms-3 ms-sm-5 ms-lg-0">
            <div class="prev arrow-box d-flex justify-content-center align-items-center rounded-circle">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20" fill="none">
                <path
                  d="M11.5872 3.01593L4.60303 10.0001L11.5872 16.9842L10.1903 19.7778L0.412557 10.0001L10.1903 0.222277L11.5872 3.01593Z"
                  fill="white" />
              </svg>
            </div>
            <div class="next arrow-box d-flex justify-content-center align-items-center rounded-circle">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20" fill="none">
                <path
                  d="M0.412842 16.9841L7.39697 9.99995L0.412842 3.01582L1.80967 0.222168L11.5874 9.99995L1.80967 19.7777L0.412842 16.9841Z"
                  fill="white" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-80">
    <div class="px-12px">
      <div class="container">
        <div class="mb-60">
          <h3 class="text-white fs-40 fw-bold mb-3">Safety is Non-Negotiable at Bimla Stone</h3>
          <p class="text-gray-600 fs-18 fw-normal mb-0">From block handling to final finishing, every stage of our
            production process is carried out with strict safety protocols in place. Our team is trained to use the
            right gear, follow disciplined workflows, and handle heavy machinery with precision and care. Regular safety
            drills, equipment checks, and monitoring ensure zero compromise, for both our people and the stone.
            Everything is processed in a well-structured, hazard-free environment that puts human well-being first.</p>
        </div>
        <div class="bimla-img w-100 h-100 overflow-hidden">
          <img src="{{ asset('assets/images/bimla-stone.png') }}" alt="images" class="w-100 h-100 object-fit-cover" />
        </div>
      </div>
    </div>
  </section>
  <!-- story-hero-section -->
  <section class="story-hero-section-main pt-80">
    <div class="px-12px">
      <div class="container">
        <div class="story-hero-section">
          <div class="row row-gap-3 align-items-center">
            <div class="col-lg-6 col-7">
              <h2 class="fs-24 fw-bold text-white mb-2 mb-lg-3  text-start">Get the perfect granite for your project,
                the way you imagined it.</h2>
              <a href="#" class="btn btn-primary-bg border-0 text-white w-100 fs-16">Speak to an Expert</a>
            </div>
            <div class="col-lg-6 col-5">
              <div class="story-hero-img h-100 w-100">
                <img src="{{ asset('assets/images/story-img.png') }}" alt="images" class="h-100 w-100 object-fit-cover" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection