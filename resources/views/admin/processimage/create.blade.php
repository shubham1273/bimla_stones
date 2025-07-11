@extends('layouts.admin')

@section('title', 'Add Process Image')

@section('content')
<div class="container mt-4">
    <h3>Add Process Image</h3>

    <form action="{{ route('process-images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="media" class="form-control" accept="image/*" required>
            @error('media') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button class="btn btn-success">Save</button>
    </form>
</div>
@endsection
