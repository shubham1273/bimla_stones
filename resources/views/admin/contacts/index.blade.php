@extends('layouts.admin')

@section('title', 'Contact Enquiries')

@section('content')
<div class="page-inner">
    <div class="page-header d-flex justify-content-between align-items-center">
        <h4 class="page-title mb-0">Contact Enquiries</h4>
    </div>

    <div class="page-category mt-3">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Enquiry List</h5>
            </div>

            <div class="card-body">
                @if($contacts->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Company</th>
                                <th>Location</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone_number }}</td>
                                    <td>{{ $contact->company_name }}</td>
                                    <td>{{ $contact->location }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this contact?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-3 d-flex justify-content-center">
                    {{ $contacts->links() }}
                </div>
                @else
                    <p class="text-muted text-center mb-0">No contact enquiries found.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
