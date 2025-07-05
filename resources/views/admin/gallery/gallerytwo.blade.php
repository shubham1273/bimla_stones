@extends('layouts.admin')

@section('title', 'Home Page')

@section('content')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Home Page</h4>
      <ul class="breadcrumbs">
        <li class="nav-home">
          <a href="#">
            <i class="icon-home"></i>
          </a>
        </li>
        <li class="separator">
          <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
          <a href="#">Pages</a>
        </li>
        <li class="separator">
          <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
          <a href="#">Starter Page</a>
        </li>
      </ul>
    </div>
    <div class="page-category">

        {{-- home area starts --}}

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">2nd Section</div>
                </div>
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('home_section.updateVideo', $section->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Video File</label>
                                <input type="file" name="media" class="form-control" accept="video/mp4,video/webm,video/ogg" required>
                                @error('media')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                                @if($section->media)
                                    <div class="mt-3">
                                        <label>Current Video:</label><br>
                                        <video width="320" height="240" controls>
                                            <source src="{{ asset('uploads/home/' . $section->media) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        {{-- home area ends --}}



    </div>
  </div>

@endsection


