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
<form method="POST" action="/edit">
@csrf
  <label for="fname">Name:</label>
  <input type="text" name="name" value="{{$category->name}}" ><br>
  <button>update</button>
</form>
</body>
</html>