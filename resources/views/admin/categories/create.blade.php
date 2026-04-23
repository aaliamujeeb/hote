@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-4">➕ Add Category</h2>

<form action="/admin/categories" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" class="form-control mb-2" placeholder="Category Name" required>

    <input type="file" name="image" class="form-control mb-3" required>

    <button class="btn btn-success">Save Category</button>

    <a href="/admin/categories" class="btn btn-secondary">Back</a>

</form>

@endsection