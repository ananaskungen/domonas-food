@extends('layouts/app')

@section('content')
	<h1 class="ms-5">Create a new Recipe</h1>
	<div class="card">
		<div class="card-body mx-5">
			<form class="form-control" method="POST" action="{{ route('posts.store') }}">
				@csrf

				<div class="mb-3">
					<label for="title" class="form-label">Title</label>
					<input type="text" class="form-control" id="title" name="title" required>
				</div>

				<div class="mb-3">
					<label for="description" class="form-label">Description</label>
				  <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Description"></textarea>
				</div>

				<div class="mb-3">
					<label for="ingrediences" class="form-label">Ingrediences</label>
					<input type="text" class="form-control" id="ingredience" name="ingredience" required>
				</div>

				<div class="mb-3">
					<label for="category" class="form-label">Category</label>
					<input type="text" class="form-control" id="category" name="category" required>
				</div>

				<div class="mb-3">
					<label for="cookingtime" class="form-label">Cookingtime</label>
					<input type="text" class="form-control" id="cookingtime" name="cookingtime" required>
				</div>

				<button type="submit" class="btn btn-success">Create</button>
			</form>
		</div>
	</div>

	<div class="mt-4 ms-5">
		<a href="{{ route('posts.index') }}" class="btn btn-secondary">&laquo; Back</a>
	</div>
@endsection