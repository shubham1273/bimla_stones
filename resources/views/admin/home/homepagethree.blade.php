@extends('layouts.admin')

@section('title', 'Home Page')

@section('content')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Home Page</h4>

    </div>
    <div class="page-category">

        {{-- home area starts --}}

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">3rd Section</div>
                </div>
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('home_section.updateSection3', $section->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="inlineinput" class="col-form-label">Title</label>
                                            <div class="p-0">
                                                <input type="text" name="title" class="form-control input-full" placeholder="Enter Title" value="{{ old('title', $section->title) }}" required>
                                                @error('title')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Description">Description</label>
                                            <textarea name="description" class="form-control" id="description" rows="5" required>{{ old('description', $section->description) }}</textarea>
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
                                    @if($section->media)
                                        <div class="mt-3">
                                            <label>Current Video 1:</label><br>
                                            <video width="320" height="240" controls>
                                                <source src="{{ asset('uploads/home/' . $section->media) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Video 2 --}}
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="media_2">Video File 2</label>
                                    <input type="file" name="media_2" class="form-control" accept="video/mp4,video/webm,video/ogg">
                                    @error('media_2')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    @if($section->media_2)
                                        <div class="mt-3">
                                            <label>Current Video 2:</label><br>
                                            <video width="320" height="240" controls>
                                                <source src="{{ asset('uploads/home/' . $section->media_2) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Video 3 --}}
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="media_3">Video File 3</label>
                                    <input type="file" name="media_3" class="form-control" accept="video/mp4,video/webm,video/ogg">
                                    @error('media_3')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    @if($section->media_3)
                                        <div class="mt-3">
                                            <label>Current Video 3:</label><br>
                                            <video width="320" height="240" controls>
                                                <source src="{{ asset('uploads/home/' . $section->media_3) }}" type="video/mp4">
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

@section('scripts')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        setTimeout(function() {  // Important: Delay ensures the textarea is fully rendered
            $('.summernote').summernote({
                height: 300,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['misc', ['undo', 'redo']]
                ]
            });
        }, 100); // Delay is sometimes needed to fix rendering issue in Laravel Blade
    });
</script>
@endsection

