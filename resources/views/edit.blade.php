<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
   <h2>Edit Product</h2>

<form action="/update/{{ $product->id }}" method="POST">
    @csrf

    <input type="text" name="name" value="{{ $product->name }}">
    <input type="number" name="price" value="{{ $product->price }}">

    <button type="submit">Update</button>
</form> 
</body>
</html>