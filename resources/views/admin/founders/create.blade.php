@extends('layouts.admin')

@section('title', 'Add Founder')

@section('content')
<div class="container mt-4">
    <h2>Add Founder</h2>

    <form action="{{ route('founders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="5" required></textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('founders.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
