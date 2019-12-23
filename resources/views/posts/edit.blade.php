@extends('layouts.app')

@section('content')

    {{-- validate form laravel 6.0 --}}
    {{-- name: ten input trong function store Postscontroller --}}
    {{-- dung route --}}
<div class="container">
    <h1>Edit Post</h1>
    <form action=" {{route('toUpdate',$post->id)}} " method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
            <br>
            <br>
            <label>Body</label>
        <textarea id="body" cols="30" rows="10" class="form-control" name="body">{{$post->body}}</textarea>
            <br>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

@endsection
