@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-4">🖼 Gallery Management</h2>

<!-- UPLOAD FORM -->
<form method="POST" action="/admin/gallery" enctype="multipart/form-data" class="mb-4">
    @csrf

    <input type="file" name="image" class="form-control mb-2" required>

    <button class="btn btn-warning">Upload Image</button>
</form>

<!-- SHOW IMAGES -->
<div class="row g-4">

    @foreach($images as $img)

    <div class="col-md-3">
        <div class="card bg-dark p-2">

            <img src="{{ asset('img/' . $img->image) }}" class="img-fluid">

            <a href="/admin/delete-gallery/{{ $img->id }}"
               class="btn btn-danger btn-sm mt-2">
                Delete
            </a>

        </div>
    </div>

    @endforeach

</div>
{{ $images->links() }}

@endsection