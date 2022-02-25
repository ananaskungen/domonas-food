@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/posts" class="btn btn-primary">Go Back</a>
    <h1>{{ $post->title }}</h1>
    <p><strong>Description:</strong> {{ $post->description }}</p>
    <p><strong>Ingrediences:</strong> {{ $post->ingredience }}</p>
    <p><strong>Time:</strong> {{ $post->cookingtime }}</p>
    <p><strong>Category:</strong> {{ $post->category }}</p>

    <br>
    <small>Written on {{ $post->created_at }}</small>
    <br>
    <span>Author: {{ $post->user->name }}</span>
</div>
@endsection