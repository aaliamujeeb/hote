@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-4">✏️ Edit Category</h2>

<form action="/admin/categories/update/{{ $category->id }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" class="form-control mb-2"
           value="{{ $category->name }}" required>

    <input type="file" name="image" class="form-control mb-2">

    <img src="{{ asset('img/' . $category->image) }}"
         width="150" class="mb-3">

    <button class="btn btn-success">Update Category</button>
</form>

@endsection