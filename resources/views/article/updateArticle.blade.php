<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categorCreation</title>
</head>
<body>
<h2>Category creation </h2>
<form method="POST" action="{{ route('article.update',['id'=>$art->id])}}">
@csrf
  <label for="fname">Name:</label>
  <input type="text"  name="name" value="{{$art->name}}" class="@error('name') is-invalid @enderror"><br>
  <label for="fname">Details:</label>
  <input type="text"  name="details" value="{{$art->details}}" class="@error('details') is-invalid @enderror"><br>
  <label for="fname">slug:</label>
  <input type="text"  name="slug"  value="{{$art->slug}}" class="@error('slug') is-invalid @enderror"><br>
  <label for="fname">is_used:</label>
  <input type="text"  name="is_used"  value="{{$art->is_used}}" class="@error('is_used') is-invalid @enderror"><br>
  <label for="fname">cat_id:</label>
  <input type="text" name="cat_id"  value="{{$art->cat_id}}" class="@error('cat_id') is-invalid @enderror"><br>
  @error('name')
    <div>{{ $message }}</div>
    @enderror
    @error('details')
    <div>{{ $message }}</div>
    @enderror
    @error('slug')
    <div>{{ $message }}</div>
    @enderror
    @error('is_used')
    <div>{{ $message }}</div>
    @enderror
    @error('cat_id')
    <div>{{ $message }}</div>
    @enderror
  <button>update</button>
</form>
</body>
</html>