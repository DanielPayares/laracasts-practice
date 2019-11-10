@extends('layout')

@section('content')
    <div class="container">
        <h1 class="alert alert-primary" style="margin-top: 1em">Project</h1>
    </div>
    <div class="container">
    <h3>{{ $project->title }}</h3>
    </div>
    <div class="container">
        <p>
            {{ $project->description }}
        </p>
    </div>
@endsection