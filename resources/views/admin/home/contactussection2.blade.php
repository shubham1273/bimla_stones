@extends('layouts.admin')

@section('title', 'Contact')

@section('content')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Contact</h4>
    </div>

    <div class="page-category">
      {{-- contact area starts --}}
      <div class="row">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Last Section</div>
          </div>

          <div class="card-body">
            @if(session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('updatecontactUs2.update', $section->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $section->title) }}" placeholder="Enter Title" required>
                    @error('title')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control summernote" id="description" rows="5" required>{{ old('description', $section->description) }}</textarea>
                    @error('description')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="media">Upload Image</label>
                    <input type="file" name="media" class="form-control" accept="image/png, image/jpeg">
                    @error('media')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror

                    @if($section->media)
                      <div class="mt-3">
                        <label>Current Image:</label><br>
                        <img src="{{ asset('uploads/contact/' . $section->media) }}" alt="Media Image" width="200">
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
      {{-- contact area ends --}}
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