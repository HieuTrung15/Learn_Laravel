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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
