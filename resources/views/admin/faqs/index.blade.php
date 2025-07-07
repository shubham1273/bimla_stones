@extends('layouts.admin')

@section('title', 'FAQs')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">FAQs</h4>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="card-title">All FAQs</div>
            <a href="{{ route('faqs.create') }}" class="btn btn-primary btn-sm">Add FAQ</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($faqs as $faq)
                        <tr>
                            <td>{{ $faq->title }}</td>
                            <td>{{ $faq->description }}</td>
                            <td>
                                <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" class="d-inline">
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
    </div>
</div>
@endsection
