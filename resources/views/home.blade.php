@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
    <div class="container-fluid py-5">
        <div class="row align-items-center">
            
            <!-- Profile Image Column -->
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <img src="{{ asset('images/About_Me.png') }}" alt="Klein Sioson" class="img-fluid rounded-circle shadow" style="max-width: 250px;">
            </div>

            <!-- Profile Text Column -->
            <div class="col-md-8">
                <h1 class="display-5 fw-bold">Hello, I'm {{ $profile->name ?? 'Student' }}</h1>
                <p class="fs-4 text-secondary">{{ $profile->title ?? 'Title' }}</p>
                <hr>
                <h3 class="mt-4">About Me</h3>
                <p class="lead">{{ $profile->bio ?? '' }}</p>
                <p>{{ $profile->about_me ?? '' }}</p>
            </div>

        </div>
    </div>
</div>
@endsection