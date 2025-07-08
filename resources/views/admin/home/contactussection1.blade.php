@extends('layouts.admin')

@section('title', 'Contact')

@section('content')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Contact</h4>
    </div>

    <div class="page-category">
      {{-- home area starts --}}
      <div class="row">
        <div class="card">
          <div class="card-header">
            <div class="card-title">1st Section</div>
          </div>

          <div class="card-body">
            @if(session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('updatecontactUs.update', $section->id) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="inlineinput">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $section->title) }}" placeholder="Enter Title" required>
                    @error('title')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="5" required>{{ old('description', $section->description) }}</textarea>
                    @error('description')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="card-action">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
              </div>
            </form>
          </div>
        </div>
      </div>
      {{-- home area ends --}}
    </div>
  </div>
@endsection
