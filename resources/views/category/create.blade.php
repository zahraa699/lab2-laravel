<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categorCreation</title>
</head>
<body>
<h2>hello {{auth()->user()->name}}</h2>
<h2>Category creation </h2>
<form method="POST" action="{{ route('category.save') }}">
@csrf
  <label for="fname">Name:</label>
  <input type="text" name="name" class="@error('name') is-invalid @enderror" ><br>
  @error('name')
  <div class="alert alert-danger"> {{ $message }}</div>
  @enderror
  <button>Submit</button>
</form>
</body>
</html>