@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <div>
        <img src="" alt=""></img>
        <p><strong>Description:</strong> {{ $post->description }}</p>
    </div>
    <div>
        <img src="" alt=""></img>
        <p><strong>Ingrediences:</strong> {{ $post->ingredience }}</p>
        <p><strong>Time:</strong> {{ $post->cookingtime }}</p>
        <p><strong>Category:</strong> {{ $post->category }}</p>
    </div>
    
    <br>
    <small>Written on {{ $post->created_at }}</small>
    <br>
    <span>Author: {{ $post->user->name }}</span>
    <a href="/posts" class="btn btn-primary">Go Back</a>
</div>
@endsection