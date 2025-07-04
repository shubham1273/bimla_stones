@extends('layouts.admin')

@section('title', 'Home Page')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Home Page</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#"><i class="icon-home"></i></a>
            </li>
            <li class="separator"><i class="icon-arrow-right"></i></li>
            <li class="nav-item"><a href="#">Pages</a></li>
            <li class="separator"><i class="icon-arrow-right"></i></li>
            <li class="nav-item"><a href="#">Starter Page</a></li>
        </ul>
    </div>

    <div class="page-category">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">6th Section</div>
                </div>
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('home_section.update', $section->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            {{-- Title and Description --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title', $section->title) }}" placeholder="Enter Title" required>
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" id="description" rows="5" required>{{ old('description', $section->description) }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            {{-- Dynamic Titles and Files --}}
                            @for($i = 1; $i <= 6; $i++)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title{{ $i }}">Title {{ $i }}</label>
                                        <input type="text" name="title{{ $i }}" class="form-control" value="{{ old('title'.$i, $section->{'title'.$i} ?? '') }}" placeholder="Enter Title {{ $i }}" required>
                                        @error('title'.$i)
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="media{{ $i }}">Input File</label>
                                        <input type="file" name="media{{ $i }}" class="form-control" accept="image/png, image/jpeg">
                                        @error('media'.$i)
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                        @if(!empty($section->{'media'.$i}))
                                            <div class="mt-3">
                                                <label>Current Image:</label><br>
                                                <img src="{{ asset('uploads/home/' . $section->{'media'.$i}) }}" alt="Media Image" width="200" />
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endfor

                        </div>

                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
