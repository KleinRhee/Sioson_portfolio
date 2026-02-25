@extends('layouts.app')

@section('content')
<h2 class="mb-4">My Skills</h2>
<div class="row">
    @foreach($skills as $skill)
    <div class="col-md-6 mb-4">
        <div class="p-3 bg-white rounded shadow-sm">
            <h5 class="mb-3">{{ $skill->name }}</h5>
            <div class="progress" style="height: 25px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $skill->proficiency }}%;" aria-valuenow="{{ $skill->proficiency }}" aria-valuemin="0" aria-valuemax="100">
                    {{ $skill->proficiency }}%
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection