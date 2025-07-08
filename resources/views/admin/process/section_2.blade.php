@extends('layouts.admin')

@section('title', 'Process')

@section('content')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Process</h4>

    </div>
    <div class="page-category">

        {{-- home area starts --}}

        <div class="card">
            <div class="card-header">
                <div class="card-title">Section 2 List</div>
                <a href="{{ route('process.section_2.create') }}" class="btn btn-primary btn-sm float-right">Add New</a>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $product)
                            <tr>
                                <td>{{ $product->title }}</td>
                                <td>
                                    @if($product->media)
                                        <img src="{{ asset('uploads/process/' . $product->media) }}" width="100">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('process.section_2.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- home area ends --}}



    </div>
  </div>

@endsection


