@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
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
                    {{ $post->body }}
                </p>
            </article>
            <a class="btn btn-secondary pull-right marginBottom10" href="{{route('principal')}}">HOME</a> 
        </div>
    </div>
</div>
@endsection