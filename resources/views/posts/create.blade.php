@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>
    {{-- validate form laravel 6.0 --}}
    {{-- name: ten input trong function store Postscontroller --}}
    <form action=" {{url('store')}} " method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
            <br>
            <br>
            <label>Body</label>
            <textarea id="body" cols="30" rows="10" class="form-control" name="body"></textarea>
            <br>
            <button type="submit">Submit</button>
        </div>
    </form>


@endsection
