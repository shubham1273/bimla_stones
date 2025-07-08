@extends('layouts.admin')

@section('title', 'About Us - Section 4')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">About Us - Section 4</h4>
    </div>
    <div class="page-category">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Section 4</div>
                </div>
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('about.section_4.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ old('title', $data->title) }}" required>
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
                                    <label for="media">Image File</label>
                                    <input type="file" name="media" class="form-control" accept="image/jpeg,image/png,image/webp,image/jpg">
                                    @error('media')<small class="text-danger">{{ $message }}</small>@enderror
                                    @if($data->media)
                                        <div class="mt-3">
                                            <label>Current Image:</label><br>
                                            <img src="{{ asset('uploads/about_us/' . $data->media) }}" alt="Current Image" width="320">
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
