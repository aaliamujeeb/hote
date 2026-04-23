@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-3">🔥 Special Offers</h2>

<a href="/admin/offers/create" class="btn btn-success mb-3">
    ➕ Add Offer
</a>

<!-- SEARCH -->
<form method="GET" action="/admin/offers" class="mb-3">
    <div class="row g-2">

        <div class="col-md-10">
            <input type="text"
                   name="search"
                   class="form-control"
                   placeholder="🔍 Search offers..."
                   value="{{ request('search') }}">
        </div>

        <div class="col-md-2">
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
            <th>Title</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        @foreach($offers as $offer)

        <tr>

            <td>
                <img src="{{ asset('img/' . $offer->image) }}" width="70">
            </td>

            <td>{{ $offer->title }}</td>

            <td>₹{{ $offer->price }}</td>

            <td>

                <a href="/admin/edit-offer/{{ $offer->id }}"
                   class="btn btn-primary btn-sm">Edit</a>

                <a href="/admin/delete-offer/{{ $offer->id }}"
                   class="btn btn-danger btn-sm">Delete</a>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>

<!-- PAGINATION -->
<div class="mt-3">
    {{ $offers->links() }}
</div>

@endsection