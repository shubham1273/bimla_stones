@extends('layouts.admin')

@section('title', 'Process')

@section('content')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Process</h4>

    </div>
    <div class="page-category">

        {{-- home area starts --}}

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">4th Section</div>
                </div>
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('process.section_4.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="inlineinput" class="col-form-label">Title</label>
                                            <div class="p-0">
                                                <input type="text" name="title" class="form-control input-full" placeholder="Enter Title" value="{{ old('title', $data->title) }}" required>
                                                @error('title')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Image Upload --}}

                            <div class="col-md-9"> 
                                <div class="form-group"> 
                                    <label for="media">Image File</label> 
                                    <input type="file" name="media" class="form-control" accept="image/jpeg,image/png,image/webp,image/jpg"> 
                                    @error('media') 
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                    @if($data->media)
                                        <div class="mt-3">
                                            <label>Current Image:</label><br>
                                            <img src="{{ asset('uploads/process/' . $data->media) }}" alt="Current Image" width="320" height="auto">
                                        </div>
                                    @endif
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


