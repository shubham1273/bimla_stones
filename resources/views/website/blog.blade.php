@extends('layouts.website')
@section('title', 'Bimla Stones - Products')
@section('content')
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
            @foreach($blogs as $blog)
              <div class="col-lg-4 col-6 px-2 px-lg-4">
                <div class="bg-black gap-2 gap-sm-3 gap-lg-4 d-flex flex-column blog-card overflow-hidden">
                  <div class="blog-img w-100 h-100">
                    <img src="{{ asset('uploads/blogs/'. $blog->blog_image) }}" alt="images" class="w-100 h-100 object-fit-cover" />
                  </div>
                  <div class="blog-details px-2 px-sm-3 px-lg-4 pb-2 pb-sm-3 pb-lg-4">
                    <h2 class="fs-23 text-white fw-bold mb-2 mb-lg-3">{{$blog->blog_title}}</h2>
                    <p class="fs-18 fw-normal text-gray-600 mb-3 mb-sm-4 mb-lg-5">{{$blog->blog_description}}</p>
                    <a href="{{ route('blog_detail', $blog->id) }}"
                      class="btn btn-black border-0 text-white w-100 fs-16 text-decoration-none">Read More</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
