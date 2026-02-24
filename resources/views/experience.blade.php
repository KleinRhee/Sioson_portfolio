@extends('layout')

@section('content')
<h2 class="mb-4">Experience & Education</h2>
<div class="row">
    @foreach($experiences as $exp)
    <div class="col-md-6 mb-4">
        <div class="card border-primary h-100 shadow-sm">
            <div class="card-header bg-primary text-white fw-bold">
                {{ $exp->type }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $exp->title }}</h5>
                <h6 class="card-subtitle mb-3 text-muted">{{ $exp->organization }} | {{ $exp->duration }}</h6>
                <p class="card-text">{{ $exp->description }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection