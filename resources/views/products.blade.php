<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>All Products</h1>
<p>Welcome to product page</p>
<h2>Add Product</h2>

<form action="/add-product" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Enter product name">
    <input type="number" name="price" placeholder="Enter price">

    <button type="submit">Save</button>
</form>   
<h2>Product List</h2>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>
            <a href="/edit/{{ $product->id }}">Edit</a> |
            <a href="/delete/{{ $product->id }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>