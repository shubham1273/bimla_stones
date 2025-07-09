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
        <div class="page-header d-flex justify-content-between align-items-center">
          <h4 class="page-title mb-0">Get A Quote Enquiries</h4>
          <a href="{{ route('quotes.export') }}" class="btn btn-success btn-sm">
            <i class="fas fa-file-excel me-1"></i> Export to Excel
          </a>
        </div>

        @if(session('success'))
          <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif

        <div class="card mt-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Product Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($quotes as $quote)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $quote->name }}</td>
                      <td>{{ $quote->phone_number }}</td>
                      <td>{{ $quote->email }}</td>
                      <td>{{ $quote->product_type }}</td>
                      <td>
                        <form action="{{ route('quotes.destroy', $quote->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this quote?');">
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
                      <td colspan="6" class="text-muted text-center">No quote enquiries found.</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>

            <div class="d-flex justify-content-center mt-3">
              {{ $quotes->links() }}
            </div>
          </div>
        </div>
      </div>
      {{-- home area ends --}}
    </div>
  </div>
@endsection
