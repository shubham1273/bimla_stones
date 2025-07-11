@extends('layouts.admin')

@section('title', 'Process Images')

@section('content')
<div class="container mt-4">
    <h3>Process Images</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('process-images.create') }}" class="btn btn-success mb-3">Add New</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $item)
            <tr>
                <td>
                    @if($item->media)
                        <img src="{{ asset('uploads/process/' . $item->media) }}" width="100">
                    @endif
                </td>
                <td>
                    <a href="{{ route('process-images.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('process-images.destroy', $item->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete this image?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="2" class="text-center">No data found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
