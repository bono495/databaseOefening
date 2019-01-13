@extends("layout")


@section('content')

    <h1>Create New</h1>
    <form method="POST"action="/projects" class="form-group">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Project Title" class="form-control">
        </div>
        <div>
            <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
        </div> 
        <div>
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
@endsection