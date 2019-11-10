@extends('layout')

@section('content')
<h1 class="alert alert-primary">Projects</h1>
@foreach($projects as $project) 
    <ul>
        <li>
            <h3>
                <a href="/projects/{{ $project->id }}">
                {{ $project->title }}
                </a>
            </h3>
            <ul>
            <li>
                {{ $project->description }}
            </li>
            <p>
                <a href="/projects/{{ $project->id }}/edit">Edit</a>
            </p>
        </ul>
        </li>
    </ul>
@endforeach
@endsection