@extends('layouts.admin')

@section('title', 'Home Page')

@section('content')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Home Page</h4>
  </div>

  <div class="page-category">

    {{-- Main area starts --}}
    <div class="row">
      <div class="card">
        <div class="card-header">
          <div class="card-title">8th Section</div>
        </div>

        <div class="card-body">
          @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($offers as $item)
              <tr>
                <td>{{ $item->title }}</td>
                <td>{{ Str::limit($item->description, 100) }}</td>
                <td>
                  @if($item->media)
                    <img src="{{ asset('uploads/home/' . $item->media) }}" width="100">
                  @endif
                </td>
                <td>
                  <a href="{{ route('workEdit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
              </tr>
              @endforeach

              @if($offers->isEmpty())
              <tr>
                <td colspan="4" class="text-center">No data found.</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
    {{-- Main area ends --}}

  </div>
</div>
@endsection
