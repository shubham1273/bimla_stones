@extends('layouts.admin')

@section('title', 'Home Page')

@section('content')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Home Page</h4>

    </div>
    <div class="page-category">

        {{-- home area starts --}}


        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Add Client</h4>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" name="photo" class="form-control" accept="image/*">
                            @error('photo') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <button class="btn btn-success">Save</button>
                        <a href="{{ route('clients.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>








        {{-- home area ends --}}



    </div>
  </div>

@endsection
