@extends('layouts.admin')

@section('title', 'Edit Job')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Edit Job</h4>
    </div>

    <form action="{{ route('jobs.update', $job->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $job->title }}" required>
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" rows="5" class="form-control" required>{{ $job->description }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('jobs.index') }}" class="btn btn-danger">Cancel</a>
    </form>
</div>
@endsection
