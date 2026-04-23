@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-3">📢 Marquee Management</h2>

<a href="/admin/marquee/create" class="btn btn-success mb-3">
    ➕ Add New Marquee
</a>

<!-- SEARCH -->
<form method="GET" action="/admin/marquee" class="mb-3">
    <div class="row g-2">

        <div class="col-md-10">
            <input type="text"
                   name="search"
                   class="form-control"
                   placeholder="🔍 Search marquee..."
                   value="{{ request('search') }}">
        </div>

        <div class="col-md-2">
            <button class="btn btn-primary w-100">Search</button>
        </div>

    </div>
</form>

<!-- TABLE -->
<div class="table-responsive">

<table class="table table-dark table-striped align-middle">

    <thead>
        <tr>
            <th>Text</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        @foreach($marquees as $item)

        <tr>

            <td>{{ $item->text }}</td>

            <td>
                @if($item->is_active)
                    <span class="text-success">Active</span>
                @else
                    <span class="text-danger">Inactive</span>
                @endif
            </td>

            <td>

                <a href="/admin/edit-marquee/{{ $item->id }}"
                   class="btn btn-primary btn-sm">Edit</a>

                <a href="/admin/delete-marquee/{{ $item->id }}"
                   class="btn btn-danger btn-sm">Delete</a>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>

<!-- PAGINATION -->
<div class="mt-3">
    {{ $marquees->links() }}
</div>

@endsection