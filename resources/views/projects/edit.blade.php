@extends('layout')

@section('content')
    <h3>edit</h3>    
    <form class="form-group" method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $project->title }}" class="form-control"> 
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description"  cols="30" rows="10" class="form-control">{{ $project->description }}</textarea>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf
        <div>
            <button class="btn btn-danger" type="submit">DELETE</button>
        </div>
    </form>
@endsection