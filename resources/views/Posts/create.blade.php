<form action="/posts" method="POST">
  @csrf 
  <input type="text" placeholder="Title" name="title">
  <input type="text" placeholder="description" name="description">
  <input type="text" placeholder="Ingrediences" name="ingredience">
  <input type="text" placeholder="Category" name="category">
  <input type="text" placeholder="Cooking Time" name="cookingtime">
  <input type="submit" value="PUT">
</form>