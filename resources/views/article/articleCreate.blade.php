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
<form method="POST" action="{{ route('article.save') }}"> 
    @csrf
  <label for="fname">Name:</label>
  <input type="text"  name="name" class="@error('name') is-invalid @enderror" ><br>
  <label for="fname">Details:</label>
  <input type="text"  name="details" class="@error('details') is-invalid @enderror"><br>
  <label for="fname">slug:</label>
  <input type="text"  name="slug" class="@error('slug') is-invalid @enderror"><br>
  <label for="fname">is_used:</label>
  <input type="text"  name="is_used" class="@error('is_used') is-invalid @enderror"><br>
  <label for="catid">choose category :</label>
    <select name="cat_id" id="catid" class="@error('cat_id') is-invalid @enderror">
    @foreach($catid as $catids)
    <option>{{$catids['id']}}</option>
    @endforeach
    </select>
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
  <button>Submit</button>

</form>
</body>
</html>