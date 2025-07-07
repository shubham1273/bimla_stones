@extends('layouts.admin')

@section('title', 'Job Applications')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Job Applications</h4>
    </div>

    <div class="page-category">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Applications</div>
            </div>

            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Position</th>
                                <th>Resume</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($applications as $job)
                                <tr>
                                    <td>{{ $job->name }}</td>
                                    <td>{{ $job->phone_number }}</td>
                                    <td>{{ $job->email }}</td>
                                    <td>{{ $job->position }}</td>
                                    <td>
                                        @if($job->resume)
                                            <a href="{{ asset('uploads/resumes/' . $job->resume) }}" target="_blank">Download</a>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('job.delete', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
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

            </div>
        </div>
    </div>
</div>
@endsection
