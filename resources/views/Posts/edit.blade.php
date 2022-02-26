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
            <textarea name="description" cols="30" rows="10" class="form-control" placeholder="{{ $post->description }}"></textarea>
        </div>

        <div class="form-group">
            <label for="ingredience">Ingredience:</label>
            <input name="ingredience" cols="30" rows="10" class="form-control" placeholder="{{ $post->ingredience }}"></input>
        </div>

        <div class="form-group">
            <label for="category">Category:</label>
            <input name="category" cols="30" rows="10" class="form-control" placeholder="{{ $post->category }}"></input>
        </div>

        <div class="form-group">
            <label for="cookingtime">Cooking Time:</label>
            <input name="cookingtime" cols="30" rows="10" class="form-control" placeholder="{{ $post->cookingtime }}"></input>
        </div>

        <input type="submit" value="Submit">
    </form>
</div>
@endsection