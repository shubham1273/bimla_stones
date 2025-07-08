@extends('layouts.admin')
@section('title', 'Our Leadership')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Our Leadership</h4>
        <a href="{{ route('about.leadership.create') }}" class="btn btn-primary btn-sm">Add Leader</a>
    </div>
    <div class="page-category">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Leaders List</div>
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
                            @forelse($products as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>
                                    @if($item->media)
                                        <img src="{{ asset('uploads/about_us/' . $item->media) }}" width="100">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('about.leadership.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center">No leaders found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
