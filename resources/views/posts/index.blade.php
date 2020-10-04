@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Posts</h1>
            <div>
                <a style="margin: 19px;" href="{{ route('posts.create')}}" class="btn btn-primary">New Post</a>
            </div> 
        <table class="table table-striped">
            <thead>
                <tr>
                <td>ID</td>
                <td>user ID</td>
                <td>category ID</td>
                <td>Title</td>
                <td>Body</td>
                <td>Image</td>
                <td colspan = 2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user_id}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{ Str::limit($post->body , 50, '...')}} </td>
                    <td>{{$post->image}}</td>
                    <td>
                        <a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
    </div>
</div>
<div class="col-sm-12">
    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}  
        </div>
    @endif
</div>
@endsection