@extends('layouts.admin')

@section('title', 'General Settings')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">General Settings</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="icon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Pages</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Starter Page</a>
            </li>
        </ul>
    </div>
    <div class="page-category">

        {{-- home area starts --}}

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">1st Section</div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                @if(Route::currentRouteName() == 'settings.index')
                                <thead class="table-light">
                                    <tr>
                                        <th width="30%">Setting Key</th>
                                        <th width="70%">Value</th>
                                    </tr>
                                </thead>
                                @endif
                                <tbody>
                                    @foreach ($settings as $setting)
                                    <tr>
                                        <td>{{ $setting->key }}</td>
                                        <td>
                                            @if($setting->type === 'text')
                                            <textarea name="{{ $setting->id }}" class="form-control" rows="3">{{ $setting->value }}</textarea>

                                            @elseif($setting->type === 'image' || $setting->type === 'file' || $setting->type === 'video')
                                            @if($setting->value)
                                            @if($setting->type === 'video')
                                            <video width="320" height="240" controls class="d-block mb-2">
                                                <source src="{{ asset($setting->value) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            @else
                                            <a href="{{ asset($setting->value) }}" target="_blank">View Current File</a>
                                            @endif
                                            @endif

                                            <input type="file" name="{{ $setting->id }}" class="form-control mt-2" @if($setting->type === 'video') accept="video/mp4,video/webm,video/ogg" @endif>

                                            @else
                                            <textarea name="{{ $setting->id }}" class="form-control" rows="3">{{ $setting->value }}</textarea>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">

                            @if(Route::currentRouteName() == 'settings.index')
                            Update Settings
                            @elseif(Route::currentRouteName() == 'settings.novocare')
                            Update
                            @endif
                        </button>
                    </form>

                </div>
            </div>
        </div>

        {{-- home area ends --}}



    </div>
</div>

@endsection
