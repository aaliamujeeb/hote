@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-3">🖼 Gallery Management</h2>

<!-- ADD BUTTON -->
<a href="/admin/gallery/create" class="btn btn-success mb-3">
    ➕ Add New Photo
</a>

<!-- TABLE -->
<div class="table-responsive">

<table class="table table-dark table-striped align-middle">

    <thead>
        <tr>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        @foreach($images as $img)

        <tr>

            <td>
                <img src="{{ asset('img/' . $img->image) }}" width="100">
            </td>

            <td>
                <a href="/admin/delete-gallery/{{ $img->id }}"
                   class="btn btn-danger btn-sm">
                    Delete
                </a>
            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>

@endsection