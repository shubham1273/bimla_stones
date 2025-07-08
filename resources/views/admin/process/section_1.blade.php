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
                    <div class="card-title">1st Section</div>
                </div>
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('process.section_1.update', $data->id) }}" method="POST" enctype="multipart/form-data">
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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Description">Description</label>
                                            <textarea name="description" class="form-control" id="description" rows="5" required>{{ old('description', $data->description) }}</textarea>
                                            @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Video 1 --}}
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="media">Video File 1</label>
                                    <input type="file" name="media" class="form-control" accept="video/mp4,video/webm,video/ogg">
                                    @error('media')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    @if($data->media)
                                        <div class="mt-3">
                                            <label>Current Video 1:</label><br>
                                            <video width="320" height="240" controls>
                                                <source src="{{ asset('uploads/process/' . $data->media) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    @endif
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


