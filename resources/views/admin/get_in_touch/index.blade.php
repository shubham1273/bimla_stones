@extends('layouts.admin')

@section('title', 'Home Page')

@section('content')
  <div class="page-inner">
    <div class="page-header d-flex justify-content-between align-items-center">
      <h4 class="page-title">Get In Touch Enquiries</h4>
      <a href="{{ route('admin.get_in_touch.export') }}" class="btn btn-success btn-sm">
        <i class="fas fa-file-excel me-1"></i> Export to Excel
      </a>
    </div>

    <div class="page-category">
      {{-- home area starts --}}
      <div class="row">
        <div class="card">
          <div class="card-body">
            @if(session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
              <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
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
                  @forelse($enquiries as $enquiry)
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
                          <img src="{{ asset('uploads/get_in_touch/' . $enquiry->reference_image) }}" width="80" class="img-thumbnail">
                        @else
                          <span class="text-muted">N/A</span>
                        @endif
                      </td>
                      <td>
                        <form action="{{ route('admin.get_in_touch.destroy', $enquiry->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this enquiry?');">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-sm btn-danger">
                            <i class="fas fa-trash-alt"></i> Delete
                          </button>
                        </form>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="9" class="text-center text-muted">No enquiries found.</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>

            <div class="d-flex justify-content-center mt-3">
              {{ $enquiries->links() }}
            </div>
          </div>
        </div>
      </div>
      {{-- home area ends --}}
    </div>
  </div>
@endsection
