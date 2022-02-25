@extends('layouts/app')

@section('content')

@foreach($posts as $post) 

<div class="col-4">
  <h3><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>

  <!-- Check if post ID == user ID -->
  @if($post->user_id == auth()->id())
  <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
  @endif
</div>

@endforeach
<div>
  @if($post->user_id == auth()->id())
  <a href="/posts/create" class="btn btn-primary">Create</a>
  @endif
</div>
    
@endsection

