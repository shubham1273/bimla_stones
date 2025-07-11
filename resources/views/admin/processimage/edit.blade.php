@extends('layouts.admin')

@section('title', 'Edit Process Image')

@section('content')
<div class="container mt-4">
    <h3>Edit Process Image</h3>

    <form action="{{ route('process-images.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="form-group">
            <label>Change Image (optional)</label>
            <input type="file" name="media" class="form-control" accept="image/*">
            @error('media') <small class="text-danger">{{ $message }}</small> @enderror

            @if($item->media)
                <div class="mt-2">
                    <img src="{{ asset('uploads/process/' . $item->media) }}" width="120">
                </div>
            @endif
        </div>

        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
