@extends('layouts.admin')
@section('title', 'Edit Product Carousel')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Edit Product Carousel</h4>

    </div>
    <div class="page-category">
        {{-- Main area starts --}}
        <div class="card">
            <div class="card-header"><div class="card-title">Edit Carousel Item</div></div>
            <div class="card-body">
                <form action="{{ route('product-carousel.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title', $product->title) }}" required>
                                @error('title')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description (Optional)</label>
                                <textarea name="description" class="form-control" rows="4">{{ old('description', $product->description) }}</textarea>
                                @error('description')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="media">Image</label>
                                <input type="file" name="media" class="form-control" accept="image/*">
                                @if($product->media)
                                    <img src="{{ asset('uploads/products/' . $product->media) }}" width="150" class="mt-2">
                                @endif
                                @error('media')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="{{ route('product-carousel.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- Main area ends --}}
    </div>
</div>
@endsection
