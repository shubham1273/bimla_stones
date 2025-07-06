@extends('layouts.admin')
@section('title', 'Add Product Carousel')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Add Product Carousel</h4>
        <ul class="breadcrumbs">
            <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
            <li class="separator"><i class="icon-arrow-right"></i></li>
            <li class="nav-item"><a href="#">Pages</a></li>
            <li class="separator"><i class="icon-arrow-right"></i></li>
            <li class="nav-item"><a href="#">Starter Page</a></li>
        </ul>
    </div>
    <div class="page-category">
        {{-- Main area starts --}}
        <div class="card">
            <div class="card-header"><div class="card-title">Add Carousel Item</div></div>
            <div class="card-body">
                <form action="{{ route('product-carousel.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" required>
                                @error('title')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description (Optional)</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                                @error('description')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="media">Image</label>
                                <input type="file" name="media" class="form-control" accept="image/*" required>
                                @error('media')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Submit</button>
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
