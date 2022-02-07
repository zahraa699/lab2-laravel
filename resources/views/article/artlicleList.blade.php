<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article page</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Article Table <a href="/artcreate">HERE</a></h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Details</th>
    <th>slug</th>
    <th>is_used</th>
    <th>cat_id</th>
    <th>ACTIONS</th>
  </tr>
  
  @foreach($art as $article)
  <tr>
    <td>{{$article->id}}</td>
    <td>{{$article->name}}</td>
    <td>{{$article->details}}</td>
    <td>{{$article->slug}}</td>
    <td>{{$article->is_used}}</td>
    <td>{{$article->cat_id}}</td>
    <td><a href="/articledetails/{{$article->id}}">show</a></td>
    <td><a href="/edit/{{$article->id}}">edit</a></td>
    <td><a href="/delete/{{$article->id}}">delete</a></td>
  </tr>
  @endforeach
</table>
</body>
</html>