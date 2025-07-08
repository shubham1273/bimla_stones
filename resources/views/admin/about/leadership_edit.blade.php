@extends('layouts.admin')
@section('title', 'Edit Leader')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Edit Leader</h4>
    </div>
    <div class="page-category">
        <div class="card">
            <div class="card-header"><div class="card-title">Update Leader</div></div>
            <div class="card-body">
                <form action="{{ route('about.leadership.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $data->title) }}" required>
                        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="5" required>{{ old('description', $data->description) }}</textarea>
                        @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="media" class="form-control" accept="image/*">
                        @error('media') <small class="text-danger">{{ $message }}</small> @enderror

                        @if($data->media)
                            <div class="mt-2">
                                <img src="{{ asset('uploads/about_us/' . $data->media) }}" width="120">
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('about.leadership') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
