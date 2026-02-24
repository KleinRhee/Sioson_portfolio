@extends('layout')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Hello, I'm {{ $profile->name ?? 'Student' }}</h1>
        <p class="col-md-8 fs-4 text-secondary">{{ $profile->title ?? 'Title' }}</p>
        <hr>
        <h3 class="mt-4">About Me</h3>
        <p class="lead">{{ $profile->bio ?? '' }}</p>
        <p>{{ $profile->about_me ?? '' }}</p>
    </div>
</div>
@endsection