@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog</h1>
    <div class="row">
        @if ($posts != null)
            @foreach ($posts as $post)
            <div class="col-md-10 mb-5">
                <h1>{{$post->title}}</h1>
                @if ($post->image != null)
                <img src="{{ $post->image }}" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                @endif
                    @foreach ($categories as $category)
                        @if ($category->id == $post->category_id)
                        <em>Category: <a href="{{route('category', $post->category_id)}}">{{ $category->name }}</a></em><br>
                        @endif
                    @endforeach
                    
                    @foreach ($users as $user)
                        @if ($user->id == $post->user_id)
                        <em>Author: {{ $user->name }}</em><br>
                        @endif
                    @endforeach
                <article class="mt-4">
                    <p>
                        {{ Str::limit($post->body , 300, '...')}}   
                    </p>
                </article>
                <a class="btn btn-secondary pull-right marginBottom10" href="{{route('post', $post->id)}}">READ MORE</a> 
            </div>
            @endforeach
        @else
        <div class="col-md-10 mb-5">
            <div class="container">
                <p class="mt-5">No results</p>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection