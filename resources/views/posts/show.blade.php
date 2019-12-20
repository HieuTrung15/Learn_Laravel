@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-success">Back</a>
    <h1>{{$post->title}}</h1>
    <h4>{{$post->body}}</h4>
    <br>
    <br>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
@endsection
