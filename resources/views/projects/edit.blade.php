@extends('layout')

@section('content')
    <h2 class="alert alert-dark" style="text-align: center;margin-top: 1em">Edit project</h2>
    <form method="POST" action="/projects/{{ $project->id }}" class="form-group">
       @method('PATCH')
        @csrf

        <div class="container">
            <label for="title" class="alert alert-primary">Title</label>
            <input type="text" class="form-control" name="title" placeholder="title" value="{{ $project->title }}">
        <br>
        </div>
        <div class="container">
            <label for="description" class="alert alert-primary">Description</label>
            
            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $project->description }}</textarea>
           
        </div>
        <div class="container" style="padding-top: 1em">
            <button type="submit" class="btn btn-primary">Update project</button>
        </div>
    </form>
    <form method="POST" action="/projects/{{ $project->id }}" class="form-group">
        @method('DELETE')
        @csrf
        <div class="container">
            <button type="submit" class="btn btn-primary">Delete project</button>
        </div>
    </form>

@endsection