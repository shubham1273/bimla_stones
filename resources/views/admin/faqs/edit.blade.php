@extends('layouts.admin')

@section('title', 'Edit FAQ')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Edit FAQ</h4>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('faqs.update', $faq->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">FAQ Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $faq->title) }}" required>
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">FAQ Description</label>
                    <textarea name="description" class="form-control" rows="5" required>{{ old('description', $faq->description) }}</textarea>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Update FAQ</button>
                <a href="{{ route('faqs.index') }}" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
