@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/posts" class="btn btn-success">Back</a>
    <h1>{{$post->title}}</h1>
    <h4>{{$post->body}}</h4>
    <br>
    <br>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

            <form action=" {{url('destroy', $post->id)}} " method="post" class="pull-right">
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        @endif
    @endif
</div>
@endsection
