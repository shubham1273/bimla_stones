@extends('layouts.admin')

@section('title', 'Contact Enquiries')

@section('content')
  <div class="page-inner">
    <div class="page-header d-flex justify-content-between align-items-center">
      <h4 class="page-title">Contact Enquiries</h4>
      <a href="{{ route('admin.contacts.export') }}" class="btn btn-success btn-sm">
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
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company</th>
                    <th>Location</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($contacts as $contact)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $contact->name }}</td>
                      <td>{{ $contact->email }}</td>
                      <td>{{ $contact->phone_number }}</td>
                      <td>{{ $contact->company_name }}</td>
                      <td>{{ $contact->location }}</td>
                      <td>
                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this contact?');">
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
                      <td colspan="7" class="text-center text-muted">No contact enquiries found.</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>

            <div class="d-flex justify-content-center mt-3">
              {{ $contacts->links() }}
            </div>
          </div>
        </div>
      </div>
      {{-- home area ends --}}
    </div>
  </div>
@endsection
