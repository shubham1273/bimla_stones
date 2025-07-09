@extends('layouts.website')
@section('title', 'Bimla Stones - Products')
@section('content')

  <div class="hero-section pt-60">
    <div class="container">
      <div class="px-12px">
        <div class="mb-60">
          <h3 class="fs-40 text-white fw-bold mb-3">{{$section1->title}}</h3>
          <p class="fs-18 text-gray-600 mb-0 fw-normal">{{$section1->description}}</p>
        </div>

        @foreach($section1 as $gallery)
        <div class="row row-gap-3">
          <div class="col-lg-6">
            <div class="gallery-1 h-100 w-100">
              <img src="{{ asset('uploads/gallery/' . $section1->media) }}" alt="images" class="h-100 w-100 object-fit-cover" />
            </div>
          </div>

        </div>
        @endforeach
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
