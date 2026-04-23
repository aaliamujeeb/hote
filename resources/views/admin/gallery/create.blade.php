@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-4">➕ Upload Image</h2>

<form method="POST" action="/admin/gallery" enctype="multipart/form-data">
    @csrf

    <input type="file" name="image" class="form-control mb-3" required>

    <button class="btn btn-success">Upload</button>

    <a href="/admin/gallery" class="btn btn-secondary">Back</a>

</form>

@endsection