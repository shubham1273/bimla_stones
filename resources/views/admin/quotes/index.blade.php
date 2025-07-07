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
                <h4 class="page-title">Get A Quote Enquiries</h4>
            </div>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-light">
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
                                @foreach($quotes as $quote)
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
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center">
                        {{ $quotes->links() }}
                    </div>
                </div>
            </div>
        </div>


        {{-- home area ends --}}



    </div>
  </div>

@endsection
