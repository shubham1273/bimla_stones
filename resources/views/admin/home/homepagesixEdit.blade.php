@extends('layouts.admin')

@section('title', 'Home Page')

@section('content')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Home Page</h4>

    </div>
    <div class="page-category">

        {{-- home area starts --}}

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">6th Section Edit</div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('home_section.updateSection6', $section->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title', $section->title) }}" required>
                                    @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <input type="file" name="media" class="form-control" accept="image/*">
                                    @error('media') <small class="text-danger">{{ $message }}</small> @enderror

                                    @if($section->media)
                                        <div class="mt-3">
                                            <img src="{{ asset('uploads/home/' . $section->media) }}" width="200">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ route('offer') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        {{-- home area ends --}}



    </div>
  </div>

@endsection
