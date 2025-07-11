@extends('layouts.website')
@section('title', 'Bimla Stones - Manufacture Process')
@section('content')

  <section class="pt-60  process-section">
    <div class="container">
      <div class="px-12px">
        <div class="section-heading w-100 mx-auto mb-60">
          <h3 class="fs-40 fw-bold text-center text-white mb-3">{{$section1->title}}</h3>
          <p class="text-start text-sm-center text-gray-600 fw-normal mb-0 fs-18">From <span
              class="fw-bold">{{$section1->description}}</p>
        </div>
        <div class="process-video-slider">
             @foreach ($section5 as $item)
          <div>
            <div class="proces-img">
              <img src="{{ asset('uploads/process/'. $item->media) }}" alt="Video Thumbnail" class="w-100 h-100 object-fit-cover">
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </section>
  <section class="pt-80">
    <div class="px-12px">
      <div class="container">
        <div class="categories-slider-section mb-40">
          <div class="categories-slider">

          @foreach ($section2 as $item)
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
                          <img src="{{ asset('uploads/process/'. $item->media) }}" alt="images"
                              class="h-100 w-100 object-fit-cover" />
                      </div>
                  </div>
              </div>
          @endforeach

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
          <h3 class="text-white fs-40 fw-bold mb-3">{{$section3->title}}</h3>
          <p class="text-gray-600 fs-18 fw-normal mb-0">{{$section3->description}}</p>
        </div>
        <div class="bimla-img w-100 h-100 overflow-hidden">
          <img src="{{ asset('uploads/process/' . $section3->media) }}" alt="images" class="w-100 h-100 object-fit-cover" />
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
              <h2 class="fs-24 fw-bold text-white mb-2 mb-lg-3  text-start">{{$section4->title}}</h2>
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
