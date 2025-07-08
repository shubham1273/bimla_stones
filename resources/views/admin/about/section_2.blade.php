@extends('layouts.admin')

@section('title', 'About Us - Section 2')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">About Us - Section 2</h4>
    </div>
    <div class="page-category">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Section 2</div>
                </div>
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('about.section_2.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title', $data->title) }}" required>
                                    @error('title')<small class="text-danger">{{ $message }}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" rows="5" required>{{ old('description', $data->description) }}</textarea>
                                    @error('description')<small class="text-danger">{{ $message }}</small>@enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="media">Upload Video (MP4, WebM, OGG)</label>
                                    <input type="file" name="media" class="form-control" accept="video/mp4,video/webm,video/ogg">
                                    @error('media')<small class="text-danger">{{ $message }}</small>@enderror

                                    @if($data->media)
                                        <div class="mt-3">
                                            <label>Current Video:</label><br>
                                            <video width="100%" height="240" controls>
                                                <source src="{{ asset('uploads/about_us/' . $data->media) }}" type="{{ $data->media_type ?? 'video/mp4' }}">
                                                Your browser does not support the video tag.
                                            </video>
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
    </div>
</div>
@endsection
