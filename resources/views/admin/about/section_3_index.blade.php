@extends('layouts.admin')
@section('title', 'About Us - Section 3 Listing')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">About Us - Section 3</h4>
    </div>
    <div class="page-category">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Section 3 List</div>
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
                                        <img src="{{ asset('uploads/about_us/' . $product->media) }}" width="100">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('about.section_3.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                            @if($products->isEmpty())
                                <tr><td colspan="3" class="text-center">No records found.</td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
