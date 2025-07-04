@extends('layouts.admin')

@section('title', 'Home Page')

@section('content')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Home Page</h4>
      <ul class="breadcrumbs">
        <li class="nav-home">
          <a href="#">
            <i class="icon-home"></i>
          </a>
        </li>
        <li class="separator">
          <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
          <a href="#">Pages</a>
        </li>
        <li class="separator">
          <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
          <a href="#">Starter Page</a>
        </li>
      </ul>
    </div>
    <div class="page-category">

        {{-- home area starts --}}

        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Edit Client</h4>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $client->name) }}" required>
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control">{{ old('description', $client->description) }}</textarea>
                            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" name="photo" class="form-control" accept="image/*">
                            @error('photo') <small class="text-danger">{{ $message }}</small> @enderror

                            @if($client->photo)
                                <div class="mt-3">
                                    <label>Current Photo:</label><br>
                                    <img src="{{ asset('uploads/clients/' . $client->photo) }}" width="150">
                                </div>
                            @endif
                        </div>

                        <button class="btn btn-success">Update</button>
                        <a href="{{ route('clients.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>





        {{-- home area ends --}}



    </div>
  </div>

@endsection
