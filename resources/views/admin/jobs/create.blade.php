@extends('layouts.admin')

@section('title', 'Add Job')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Add New Job</h4>
    </div>

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" rows="5" class="form-control" required></textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('jobs.index') }}" class="btn btn-danger">Cancel</a>
    </form>
</div>
@endsection
