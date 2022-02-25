@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit post</h1>

    <form action="{{ route('posts.update', ['post' => $post]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Description">{{ $post->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="ingredience">Ingredience:</label>
            <textarea name="ingredience" cols="30" rows="10" class="form-control" placeholder="Ingredience">{{ $post->ingredience }}</textarea>
        </div>

        <div class="form-group">
            <label for="category">Category:</label>
            <textarea name="category" cols="30" rows="10" class="form-control" placeholder="Category">{{ $post->category }}</textarea>
        </div>

        <div class="form-group">
            <label for="cookingtime">Cooking Time:</label>
            <textarea name="cookingtime" cols="30" rows="10" class="form-control" placeholder="Cookingtime">{{ $post->cookingtime }}</textarea>
        </div>

        <input type="submit" value="Submit">
    </form>
</div>
@endsection