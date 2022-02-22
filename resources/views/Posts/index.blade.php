@extends('layouts/app')

@section('content')
@foreach($posts as $post) {
  <h1> {{ $post->title }} </h1>
  <p> {{ $post->description }} </p>
  <p> {{ $post->ingredience }} </p>
  <p> {{ $post->category }} </p>
  <p> {{ $post->cookingtime }} </p>
}
@endforeach
@endsection

