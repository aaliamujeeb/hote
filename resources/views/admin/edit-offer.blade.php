@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-4">Edit Offer</h2>

<form method="POST" action="/admin/update-offer/{{ $offer->id }}" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" value="{{ $offer->title }}" class="form-control mb-2">

    <input type="text" name="description" value="{{ $offer->description }}" class="form-control mb-2">

    <input type="number" name="price" value="{{ $offer->price }}" class="form-control mb-2">

    <input type="file" name="image" class="form-control mb-2">

    <button class="btn btn-success">Update</button>

</form>

@endsection