@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Add a post</h1>
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
         <form method="post" action="{{ route('posts.store') }}">
            @csrf
            <div class="form-group">    
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title"/>
            </div>    
            <div class="form-group">    
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
            </div>  
            <div class="form-group">    
                <label for="image">Image</label>
                <input type="file" class="form-control-file" name="image"/>
            </div>                    
             <button type="submit" class="btn btn-primary-outline">Add post</button>
         </form>
     </div>
   </div>
   </div>
@endsection