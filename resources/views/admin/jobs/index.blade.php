@extends('layouts.admin')

@section('title', 'Job List')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Jobs</h4>
        <a href="{{ route('jobs.create') }}" class="btn btn-primary btn-sm">Add Job</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th width="150px">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
                <tr>
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->description }}</td>
                    <td>
                        <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
