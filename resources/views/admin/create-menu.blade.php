@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-3">➕ Add New Food</h2>

<form method="POST" action="/admin/add-menu" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" placeholder="Food Name" class="form-control mb-2" required>

    <input type="text" name="description" placeholder="Description" class="form-control mb-2" required>

    <input type="number" name="price" placeholder="Price" class="form-control mb-2" required>

    <select name="category_id" class="form-control mb-2" required>
        <option value="">Select Category</option>
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select>

    <label>
    <input type="checkbox" name="is_veg" value="1"> Veg
    </label>

    <input type="file" name="image" class="form-control mb-2" required>

    <button class="btn btn-primary">Save Food</button>

    <a href="/admin/menu" class="btn btn-secondary">Back</a>

</form>

@endsection