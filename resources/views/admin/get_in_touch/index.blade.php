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
                <h4 class="page-title">Get In Touch Enquiries</h4>
            </div>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card">
                <div class="card-body">
                    <table class="table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Company</th>
                                <th>Looking For</th>
                                <th>Location</th>
                                <th>Reference Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($enquiries as $enquiry)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $enquiry->name }}</td>
                                    <td>{{ $enquiry->phone_number }}</td>
                                    <td>{{ $enquiry->email }}</td>
                                    <td>{{ $enquiry->company_name }}</td>
                                    <td>{{ $enquiry->looking_for }}</td>
                                    <td>{{ $enquiry->location }}</td>
                                    <td>
                                        @if($enquiry->reference_image)
                                            <img src="{{ asset('uploads/get_in_touch/' . $enquiry->reference_image) }}" width="80">
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.get_in_touch.destroy', $enquiry->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this enquiry?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $enquiries->links() }}
                    </div>
                </div>
            </div>
        </div>

        {{-- home area ends --}}



    </div>
  </div>

@endsection
