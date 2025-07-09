@extends('layouts.website')
@section('title', 'Bimla Stones - Blog Detail')
@section('content')
    <div class="hero-section">
    <div class="container">
      <div class="px-12px">
        <a href="{{route('blog')}}" class="d-flex gap-1 gap-sm-3 align-items-center mb-40 text-decoration-none blog-back">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
            <path
              d="M25.3333 14.6667H12L16.3867 10.28C16.5116 10.1561 16.6108 10.0086 16.6785 9.84611C16.7462 9.68363 16.7811 9.50935 16.7811 9.33334C16.7811 9.15732 16.7462 8.98305 16.6785 8.82057C16.6108 8.65809 16.5116 8.51062 16.3867 8.38667C16.1369 8.13834 15.7989 7.99895 15.4467 7.99895C15.0944 7.99895 14.7565 8.13834 14.5067 8.38667L8.78667 14.12C8.28588 14.6178 8.00298 15.2939 8 16C8.00649 16.7015 8.28913 17.3721 8.78667 17.8667L14.5067 23.6C14.631 23.7234 14.7784 23.8212 14.9405 23.8877C15.1026 23.9541 15.2762 23.988 15.4514 23.9874C15.6266 23.9868 15.7999 23.9517 15.9616 23.8841C16.1232 23.8164 16.2699 23.7177 16.3933 23.5933C16.5168 23.469 16.6145 23.3216 16.681 23.1595C16.7475 22.9974 16.7814 22.8238 16.7807 22.6486C16.7801 22.4734 16.745 22.3001 16.6774 22.1385C16.6098 21.9768 16.511 21.8301 16.3867 21.7067L12 17.3333H25.3333C25.687 17.3333 26.0261 17.1929 26.2761 16.9428C26.5262 16.6928 26.6667 16.3536 26.6667 16C26.6667 15.6464 26.5262 15.3072 26.2761 15.0572C26.0261 14.8071 25.687 14.6667 25.3333 14.6667Z"
              fill="white" />
          </svg>
          <p class="text-gray-600 fs-18 fw-normal mb-0">Back</p>
        </a>
        <p class="fs-23 fw-bold text-white text-center mb-40">{{$blog->blog_title}}</p>
        <div class="bg-black gap-3 gap-lg-4 d-flex flex-column blog-card overflow-hidden">
          <div class="blog-img w-100 h-100">
            <img src="{{ asset('/uploads/blogs/'. $blog->blog_image) }}" alt="images" class="w-100 h-100 object-fit-cover" />
          </div>
          <div class="blog-details px-3 px-lg-4 pb-5 text-white">
            {{$blog->blog_description}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection