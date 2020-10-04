@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a post</h1>
        <div>
        @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div><br />
        @endif
            <form method="post" action="{{ route('posts.update', $post->id) }}">
                @method('PATCH') 
                @csrf
                <div class="form-group">    
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" value="{{ $post->title }}"/>
                </div>
                <div class="form-group">    
                    <label for="user">User:</label>
                    <select class="form-control" name="user">
                    @foreach ($users as $user)
                        <option value="{{$user->id}} {{ $post->user_id == $user->id ? 'selected' : '' }} ">{{$user->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">    
                    <label for="category">Category:</label>
                    <select class="form-control" name="category">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                    @endforeach
                    </select>
                </div> 
                <div class="form-group">    
                    <label for="body">Body</label>
                    <textarea class="form-control" name="body" id="" cols="30" rows="10">{{ $post->body }}</textarea>
                </div>  
                <div class="form-group">    
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image" value="{{ $post->image }}"/>
                </div>                    
                <button type="submit" class="btn btn-primary-outline">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection