@extends('layout')

@section('content')
<h2 class="mb-4">Contact Information</h2>
<div class="card shadow-sm col-md-8 mx-auto mt-5">
    <div class="card-body p-4">
        <h4 class="card-title mb-4">Get In Touch</h4>
        <ul class="list-group list-group-flush fs-5">
            <li class="list-group-item px-0"><strong>Email:</strong> {{ $contact->email ?? 'N/A' }}</li>
            <li class="list-group-item px-0"><strong>Phone:</strong> {{ $contact->phone ?? 'N/A' }}</li>
            <li class="list-group-item px-0"><strong>Address:</strong> {{ $contact->address ?? 'N/A' }}</li>
            @if(isset($contact->github))
                <li class="list-group-item px-0"><strong>GitHub:</strong> <a href="{{ $contact->github }}" target="_blank" class="text-decoration-none">{{ $contact->github }}</a></li>
            @endif
        </ul>
    </div>
</div>
@endsection