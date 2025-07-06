@extends('layouts.admin')

@section('title', 'Founders')

@section('content')
<div class="container mt-4">
    <h2>Founders</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('founders.create') }}" class="btn btn-primary mb-3">Add New Founder</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($founders as $founder)
            <tr>
                <td>
                    @if($founder->image)
                        <img src="{{ asset('uploads/founders/' . $founder->image) }}" width="100">
                    @else
                        N/A
                    @endif
                </td>
                <td>{{ $founder->name }}</td>
                <td>{{ $founder->description }}</td>
                <td>
                    <a href="{{ route('founders.edit', $founder->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <form action="{{ route('founders.destroy', $founder->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $founders->links() }}
</div>
@endsection
