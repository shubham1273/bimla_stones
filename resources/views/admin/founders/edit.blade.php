@extends('layouts.admin')

@section('title', 'Edit Founder')

@section('content')
<div class="container mt-4">
    <h2>Edit Founder</h2>

    <form action="{{ route('founders.update', $founder->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $founder->name }}" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="5" required>{{ $founder->description }}</textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror

            @if($founder->image)
                <div class="mt-2">
                    <img src="{{ asset('uploads/founders/' . $founder->image) }}" width="150">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('founders.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
