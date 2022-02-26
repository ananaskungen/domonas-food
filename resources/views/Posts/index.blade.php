@extends('layouts/app')

@section('content')

@foreach($posts as $post)

<div class="container">
  <div>

    <div class="ms-5" class="col-4 d-flex justify-content-center">
      <h3><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
      <h3><p>{{ $post->description }}</p></h3>
      <img src="https://www.thetranshotel.com/images/Y1WCKFz4BX_980x500.jpg" alt="Pakistani Buffe" width="200px" height="200px">
    </div>

    <div class="btn-group d-flex justify-content-center">
      <div>
        <!-- Check if post ID == user ID Button -->
        @if($post->user_id == auth()->id())

          <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
          @endif
        </div>

        <div>
          @if($post->user_id == auth()->id())
          <a href="/posts/create" class="btn btn-primary ms-2">Create</a>
          @endif
        </div>
      </div>
  </div>
</div>

@endforeach

@endsection