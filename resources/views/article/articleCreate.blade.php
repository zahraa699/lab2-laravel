<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>articlecrateation</title>
</head>
<body>
    <h2>Article creation </h2>
<form method="POST" action="/savec"> 
    @csrf
  <label for="fname">Name:</label>
  <input type="text"  name="name" ><br>
  <label for="fname">Details:</label>
  <input type="text"  name="details" ><br>
  <label for="fname">slug:</label>
  <input type="text"  name="slug" ><br>
  <label for="fname">is_used:</label>
  <input type="text"  name="is_used" ><br>
  <label for="fname">cat_id:</label>
  <input type="text" name="cat_id" ><br>
  <button>Submit</button>

</form>
</body>
</html>