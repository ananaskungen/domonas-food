@extends('layouts/app')

@section('content')
        <div class="d-flex justify-content-end me-5">
          @if(Auth()->id())
          <a href="/posts/create" class="btn btn-primary ms-2">Create</a>
          @endif
        </div>


@foreach($posts as $post)

<div class="container">
  <div>

    <div class="ms-5" class="col-4 d-flex justify-content-center">
<!--       <img src="https://www.thetranshotel.com/images/Y1WCKFz4BX_980x500.jpg" alt="Pakistani Buffe" width="200px" height="200px"> -->
      <h3><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
      <h3><p>{{ $post->description }}</p></h3>
    </div>

    <div class="btn-group d-flex justify-content-end">
      <div class="d-flex justify-content-end"> 
        
        @if($post->user_id == auth()->id())

          <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
          @endif
        </div>
      </div>
  </div>
</div>

@endforeach

@endsection