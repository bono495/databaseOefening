@extends('layout')

@section('content')
    <h1>{{ $project->title }}</h1>

    <div> {{ $project->description }}</div>

    <a href="/projects/{{ $project->id }}/edit">Edit</a>

@if ($project->tasks->count())
    <div>
        @foreach ($project->tasks as $task)
                <form class="form-group" method="POST" action="/tasks/{{ $task->id }}">
                    @method('PATCH')
                    @csrf

                    <label for="completed">
                        <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                        {{ $task->description }}
                    </label>    
                </form>     
        @endforeach
    </div>
@endif

<div>
    <form method="POST" action="/projects/{{ $project->id }}/tasks" class="form-group">
        @csrf
        
        <label for="description">New</label>

        <div>
            <input class="form-control" type="text" name="description">
        </div>
    </form>
</div>
@endsection