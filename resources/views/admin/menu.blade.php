@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-3">🍽 Food Management</h2>

<!-- ADD BUTTON -->
<a href="/admin/menu/create" class="btn btn-success mb-3">
    ➕ Add New Food
</a>

<!-- ADD FORM -->
<div id="addFoodForm" class="card p-3 mb-4 bg-dark text-white" >

<form method="GET" action="/admin/menu" class="mb-3">

    <div class="row g-2">

        <!-- SEARCH -->
        <div class="col-md-4">
            <input type="text" name="search" class="form-control"
                   placeholder="🔍 Search food..."
                   value="{{ request('search') }}">
        </div>

        <!-- CATEGORY FILTER -->
        <div class="col-md-3">
            <select name="category_id" class="form-control">
                <option value="">📂 All Categories</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}"
                        {{ request('category_id') == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- VEG FILTER -->
        <div class="col-md-3">
            <select name="veg" class="form-control">
                <option value="">🍽 All Types</option>
                <option value="veg" {{ request('veg') == 'veg' ? 'selected' : '' }}>🌱 Veg</option>
                <option value="nonveg" {{ request('veg') == 'nonveg' ? 'selected' : '' }}>🍗 Non-Veg</option>
            </select>
        </div>

        <!-- BUTTONS -->
        <div class="col-md-2">
            <button class="btn btn-warning w-100">Apply</button>
        </div>

    </div>

</form>

</div>

<!-- TABLE -->
<div class="table-responsive">

<table class="table table-dark table-striped align-middle">

    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <th>Veg</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        @foreach($items as $item)

        <tr>

            <td>
                <img src="{{ asset('img/' . $item->image) }}" width="70">
            </td>

            <td>{{ $item->title }}</td>

            <td>{{ Str::limit($item->description, 40) }}</td>

            <td>₹{{ $item->price }}</td>

            <td>
                {{ $item->category->name ?? 'N/A' }}
            </td>

            <td>
                @if($item->is_veg)
                    🌱
                @else
                    🍗
                @endif
            </td>

            <td>
                <a href="/admin/edit-menu/{{ $item->id }}" class="btn btn-primary btn-sm">Edit</a>
                <a href="/admin/delete-menu/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</a>
            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>

<!-- PAGINATION -->
<div class="mt-3">
    {{ $items->links() }}
</div>

@endsection