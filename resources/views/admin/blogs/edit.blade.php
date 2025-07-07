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
            <div class="page-header">
                <h4 class="page-title">Edit Blog</h4>
            </div>

            <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Blog Title</label>
                    <input type="text" name="blog_title" value="{{ $blog->blog_title }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Blog Description</label>
                    <textarea name="blog_description" class="form-control" rows="4" required>{{ $blog->blog_description }}</textarea>
                </div>

                <div class="form-group">
                    <label>Blog Image</label>
                    <input type="file" name="blog_image" class="form-control">
                    @if($blog->blog_image)
                        <img src="{{ asset('uploads/blogs/' . $blog->blog_image) }}" width="100" class="mt-2">
                    @endif
                </div>

                <button type="submit" class="btn btn-success">Update Blog</button>
                <a href="{{ route('blogs.index') }}" class="btn btn-danger">Cancel</a>
            </form>
        </div>





        {{-- home area ends --}}



    </div>
  </div>

@endsection
