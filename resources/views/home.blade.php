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
                    <p>You are logged in!</p>
                    <ul>
                        <li><a href="{{route('categories.index')}}">Categories</a></li>
                        <li><a href="{{route('posts.index')}}">Posts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
