@extends('layouts.admin')

@section('title', 'Gallery')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Gallery</h4>
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
                <a href="#">Gallery</a>
            </li>
        </ul>
    </div>
    <div class="page-category">

        {{-- Gallery section starts --}}
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Gallery Section</div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('gallery.updateSection4', $section->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            {{-- Title --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title', $section->title) }}" placeholder="Enter Title" required>
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            {{-- Image 1 --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="media">Upload Image 1</label>
                                    <input type="file" name="media" class="form-control" accept="image/png, image/jpeg">
                                    @error('media')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                    @if($section->media)
                                        <div class="mt-3">
                                            <label>Current Image 1:</label><br>
                                            <img src="{{ asset('uploads/gallery/' . $section->media) }}" alt="Gallery Image 1" width="200" />
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Image 2 --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="media_2">Upload Image 2</label>
                                    <input type="file" name="media_2" class="form-control" accept="image/png, image/jpeg">
                                    @error('media_2')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                    @if($section->media_2)
                                        <div class="mt-3">
                                            <label>Current Image 2:</label><br>
                                            <img src="{{ asset('uploads/gallery/' . $section->media_2) }}" alt="Gallery Image 2" width="200" />
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Image 3 --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="media_3">Upload Image 3</label>
                                    <input type="file" name="media_3" class="form-control" accept="image/png, image/jpeg">
                                    @error('media_3')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                    @if($section->media_3)
                                        <div class="mt-3">
                                            <label>Current Image 3:</label><br>
                                            <img src="{{ asset('uploads/gallery/' . $section->media_3) }}" alt="Gallery Image 3" width="200" />
                                        </div>
                                    @endif
                                </div>
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
        {{-- Gallery section ends --}}
    </div>
</div>
@endsection
