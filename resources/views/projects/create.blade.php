@extends('layout')

@section('content')
<body>
    @if ($errors->any())
        <div class="alert alert-danger mt-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
    <h1 class="alert alert-primary mt-3">Create a new project</h1>
    <form method="POST" action="/projects">
        @csrf
        <div class="mb-3">
        <input type="text" name="title" placeholder="Project title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" value="old('description)'"></textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Create project</button>
        </div>
    </form>
</div>
</body>
@endsection