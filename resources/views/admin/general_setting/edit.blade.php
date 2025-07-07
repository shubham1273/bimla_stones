@extends('layouts.admin')

@section('title', 'Edit Setting')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Edit Setting: {{ $setting->key }}</h4>
    </div>

    <div class="card">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('general-settings.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="value">{{ $setting->key }}</label>

                    @if($setting->type == 'image')
                        <input type="file" name="value" class="form-control">
                        @if($setting->value)
                            <div class="mt-2">
                                <img src="{{ asset('uploads/settings/' . $setting->value) }}" width="150">
                            </div>
                        @endif
                    @else
                        <input type="text" name="value" class="form-control" value="{{ old('value', $setting->value) }}" required>
                    @endif

                    @error('value')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
