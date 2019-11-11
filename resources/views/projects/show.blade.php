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
            @if($project->tasks->count())
            <div class="alert alert-primary">
                Tasks
            </div>
            @endif
            
            @foreach($project->tasks as $task)
            <li> {{ $task->description }} </li>
            @endforeach
    </div>
@endsection