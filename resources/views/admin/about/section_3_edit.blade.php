@extends('layouts.admin')
@section('title', 'Edit Section 3')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Edit Section 3</h4>
    </div>
    <div class="page-category">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Edit Content</div>
            </div>
            <div class="card-body">
                <form action="{{ route('about.section_3.update', $data->id) }}" method="POST" enctype="multipart/form-data">
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
                                <label for="media">Image File</label>
                                <input type="file" name="media" class="form-control" accept="image/*">
                                @error('media')<small class="text-danger">{{ $message }}</small>@enderror
                                @if($data->media)
                                    <div class="mt-3">
                                        <label>Current Image:</label><br>
                                        <img src="{{ asset('uploads/about_us/' . $data->media) }}" width="150">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('about.section_3') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
