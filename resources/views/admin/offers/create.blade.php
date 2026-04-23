@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-4">➕ Add Offer</h2>

<form method="POST" action="/admin/offers" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" class="form-control mb-2" placeholder="Offer Title">

    <input type="text" name="description" class="form-control mb-2" placeholder="Description">

    <input type="number" name="price" class="form-control mb-2" placeholder="Price">

    <input type="file" name="image" class="form-control mb-3">

    <button class="btn btn-success">Save Offer</button>

    <a href="/admin/offers" class="btn btn-secondary">Back</a>

</form>

@endsection