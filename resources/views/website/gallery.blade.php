@extends('layouts.website')
@section('title', 'Bimla Stones - Products')
@section('content')

  <div class="hero-section pt-60">
    <div class="container">
      <div class="px-12px">
        <div class="mb-60 text-white">
          <h3 class="fs-40 text-white fw-bold mb-3">{{$section1->title}}</h3>
          <p class="fs-18 text-gray-600 mb-0 fw-normal text-white">{!! $section1->description !!}</p>
        </div>
        <div class="row row-gap-3">
          <div class="col-lg-6">
            <div class="gallery-1 h-100 w-100">
              <img src="{{ asset('uploads/gallery/'. $section1->media) }}" alt="images" class="h-100 w-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="d-flex flex-row flex-lg-column h-100 gap-3">
              <div class="gallery-2 h-100 w-100">
                <img src="{{ asset('uploads/gallery/'. $section1->media_2) }}" alt="images" class="h-100 w-100 object-fit-cover" />
              </div>
              <div class="gallery-2 h-100 w-100">
                <img src="{{ asset('uploads/gallery/'. $section1->media_3) }}" alt="images" class="h-100 w-100 object-fit-cover" />
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
          <div class="col-lg-6 mt-0 mt-lg-4 text-white">
            <h2 class="fs-40 fw-bold text-white mb-2 mb-lg-3  text-start">{{$section2->title}}</h2>
            <p class="fs-18 text-gray-600 mb-3 mb-lg-4 fw-normal text-white">{!! $section2->description !!}</p>
          </div>
          <div class="col-lg-6">
            <div class="story-hero-img h-100 w-100">
              <img src="{{ asset('uploads/gallery/'. $section1->media) }}" alt="images" class="h-100 w-100 object-fit-cover" />
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
        <h3 class="text-center fs-40 text-white fw-bold mb-60">{{$section3->title}}</h3>
        <div class="row row-gap-3">
          <div class="col-lg-4 col-6">
            <div class="Polishing-img">
              <img src="{{ asset('uploads/gallery/'. $section3->media) }}" alt="images" class="w-100 h-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="Polishing-img">
              <img src="{{ asset('uploads/gallery/'. $section3->media_2) }}" alt="images" class="w-100 h-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="Polishing-img">
              <img src="{{ asset('uploads/gallery/'. $section3->media_3) }}" alt="images" class="w-100 h-100 object-fit-cover" />
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
        <h3 class="text-center fs-40 text-white fw-bold mb-60">{{$section4->title}}</h3>
        <div class="row row-gap-3">
          <div class="col-lg-4 col-6">
            <div class="Polishing-img">
              <img src="{{ asset('uploads/gallery/'. $section1->media) }}" alt="images" class="w-100 h-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="Polishing-img">
              <img src="{{ asset('uploads/gallery/'. $section4->media_2) }}" alt="images" class="w-100 h-100 object-fit-cover" />
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="Polishing-img">
              <img src="{{ asset('uploads/gallery/'. $section4->media_3) }}" alt="images" class="w-100 h-100 object-fit-cover" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
