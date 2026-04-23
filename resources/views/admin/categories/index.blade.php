@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-3">📂 Category Management</h2>

<!-- ADD BUTTON -->
<a href="/admin/categories/create" class="btn btn-success mb-3">
    ➕ Add Category
</a>

<form method="GET" action="/admin/categories" class="mb-3">

    <div class="row g-2">

        <!-- SEARCH -->
        <div class="col-md-8">
            <input type="text"
                   name="search"
                   class="form-control"
                   placeholder="🔍 Search category..."
                   value="{{ request('search') }}">
        </div>

        <!-- BUTTON -->
        <div class="col-md-4">
            <button class="btn btn-warning w-100">Search</button>
        </div>

    </div>

</form>

<!-- TABLE -->
<div class="table-responsive">

<table class="table table-dark table-striped align-middle">

    <thead>
        <tr>
            <th>Image</th>
            <th>Category Name</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        @foreach($categories as $cat)

        <tr>

            <td>
                <img src="{{ asset('img/' . $cat->image) }}" width="70">
            </td>

            <td>{{ $cat->name }}</td>

            <td>

                <a href="/admin/categories/edit/{{ $cat->id }}"
                   class="btn btn-primary btn-sm">
                    Edit
                </a>

                <a href="/admin/delete-category/{{ $cat->id }}"
                   class="btn btn-danger btn-sm">
                    Delete
                </a>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>
<div class="mt-3">
    {{ $categories->links() }}
</div>

@endsection