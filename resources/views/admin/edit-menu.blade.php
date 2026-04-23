@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-4">✏️ Edit Menu Item</h2>

<form method="POST" action="/admin/update-menu/{{ $item->id }}" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" value="{{ $item->title }}" class="form-control mb-2">
    <input type="text" name="description" value="{{ $item->description }}" class="form-control mb-2">
    <input type="number" name="price" value="{{ $item->price }}" class="form-control mb-2">
    <label>
    <input type="checkbox" name="is_veg" value="1"
        {{ $item->is_veg ? 'checked' : '' }}>
    Veg
    </label>

    <img src="{{ asset('img/' . $item->image) }}" width="150" class="mb-3">

    <input type="file" name="image" class="form-control mb-2">

    <button class="btn btn-success">Update</button>
</form>

@endsection