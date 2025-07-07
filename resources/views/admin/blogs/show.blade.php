@extends('layouts.admin')

@section('title', 'Home Page')

@section('content')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Home Page</h4>

    </div>
    <div class="page-category">

        {{-- home area starts --}}




        <div class="page-inner">
            <div class="page-header d-flex justify-content-between align-items-center">
                <h4 class="page-title m-0">View Blog</h4>
                <a href="{{ route('blogs.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
            </div>


            <div class="card">
                <div class="card-body">
                    <h5>Blog Title:</h5>
                    <p>{{ $blog->blog_title }}</p>

                    <h5>Blog Description:</h5>
                    <p>{{ $blog->blog_description }}</p>

                    <h5>Blog Image:</h5>
                    @if($blog->blog_image)
                        <img src="{{ asset('uploads/blogs/' . $blog->blog_image) }}" width="300">
                    @else
                        <p>No Image</p>
                    @endif
                </div>
            </div>
        </div>



        {{-- home area ends --}}



    </div>
  </div>

@endsection
