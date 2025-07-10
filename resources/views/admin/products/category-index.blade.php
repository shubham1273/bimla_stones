@extends('layouts.admin')
@section('title', 'Product Categories')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Product Categories</h4>

    </div>
    <div class="page-category">
        {{-- Main area starts --}}
        <div class="card">
            <div class="card-header">
                <div class="card-title">Product Categories</div>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->title }}</td>
                                <td>
                                    @if($product->media)
                                        <img src="{{ asset('uploads/products/' . $product->media) }}" width="100">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('product-categories.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Main area ends --}}
    </div>
</div>
@endsection
