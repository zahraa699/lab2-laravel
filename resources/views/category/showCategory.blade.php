<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<table>
<tr>
    <th>ID</th>
    <th>Name</th>

  </tr>

  <tr>
    <td>{{$category ->id}}</td>
    <td>{{$category ->name}}</td>

    
  </tr>
</table>
<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Details</th>
    <th>slug</th>
    <th>is_used</th>
    <th>cat_id</th>

  </tr>
<tr>
    @foreach($cate as $cateoy)
    <td>{{$cateoy ->id}}</td>
    <td>{{$cateoy ->name}}</td>
    <td>{{$cateoy ->details}}</td>
    <td>{{$cateoy ->slug}}</td>
    <td>{{$cateoy ->is_used }}</td>
    <td>{{$cateoy ->cat_id }}</td>
    @endforeach
    <br>

  </tr>
</table>
</body>
</html>