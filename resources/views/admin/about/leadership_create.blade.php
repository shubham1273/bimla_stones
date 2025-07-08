@extends('layouts.admin')
@section('title', 'Add Leader')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Add Leader</h4>
    </div>
    <div class="page-category">
        <div class="card">
            <div class="card-header"><div class="card-title">Create Leader</div></div>
            <div class="card-body">
                <form action="{{ route('about.leadership.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
                        @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="media" class="form-control" accept="image/*" required>
                        @error('media') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ route('about.leadership') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
