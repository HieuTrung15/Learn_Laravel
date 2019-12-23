@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Create your post</h2>
                    <ul class="navbar-nav mr-auto navbar-right">
                        <li><a href="/create">Create Post</a></li>
                    </ul>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <td>Title</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td> {{$post->title}} </td>
                                    <td><a href="posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        <form action=" {{url('destroy', $post->id)}} " method="post" class="pull-right">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You don't have any post</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
