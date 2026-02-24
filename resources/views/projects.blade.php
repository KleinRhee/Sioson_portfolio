@extends('layout')

@section('content')
<h2 class="mb-4">My Projects</h2>
<div class="row">
    @foreach($projects as $project)
    <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h4 class="card-title">{{ $project->title }}</h4>
                <p class="card-text mt-3">{{ $project->description }}</p>
                <p><strong>Technologies:</strong> <span class="badge bg-secondary">{{ $project->technologies }}</span></p>
            </div>
            @if($project->link)
            <div class="card-footer bg-white border-0 pb-3">
                <a href="{{ $project->link }}" target="_blank" class="btn btn-outline-primary btn-sm">View on GitHub</a>
            </div>
            @endif
        </div>
    </div>
    @endforeach
</div>
@endsection